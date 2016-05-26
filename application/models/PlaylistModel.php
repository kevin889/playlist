<?php

class PlaylistModel extends CI_Model {

    public function sendToDeezer($playlistid,$data)
    {
        $this->load->model('LoginModel');
        $url = "http://api.deezer.com/playlist/". $playlistid ."/tracks?access_token=".$this->LoginModel->getToken();
       $data = implode(", ",$data);
        $data = "songs=".$data;
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
//        var_dump($response);
//        var_dump($this->session->get_userdata('code'));
//        var_dump($this->LoginModel->getToken());
//        die();
        return $response;
    }
    public function orderDeezer($playlistid,$data)
    {
        $url = "http://api.deezer.com/playlist/". $playlistid ."/tracks";
        $data = implode(", ",$data);
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function update_playlist()
    {
        $this->load->model('RequestModel');
        $this->load->helper('date');

        // get history playlist 1h

        /* Get all requests */
        $all_requests = $this->RequestModel->getAll();
        if(!$all_requests) return false;


        //var_dump($all_requests);
        $votes = array();
        //echo "<pre>";print_r($all_requests);echo "</pre><hr>";

        foreach($all_requests as $request){

            $track_id = $request->track_id;
            if (!array_key_exists($track_id,$votes)){
                $votes[$track_id] = 0;
            }
            $votes[$track_id] += 1;
            $now = time();
            $post_date = strtotime($request->timestamp);

            $song = array(
                "track_id" => $track_id,
                "title" => $request->data,
                "time_ago" => timespan($post_date, $now) . " ago",
                "timestamp" => $request->timestamp
            );

            $songs_by_trackid[$track_id] = $song;
            $songs[] = $song;
        }
        /* Calculate score by request time */
        $total = count($songs);

        foreach($songs as $k=>$song){
            $score = $total - $k;
            $songs[$k]["score"] = $score;
        }

        /* combine scores */
        $totals = array();
        foreach($songs as $k=>$song){
            if (!array_key_exists($song["track_id"],$totals)){
                $totals[$song["track_id"]] = 0;
            }
            $totals[$song["track_id"]] += (int)$song["score"];
        }
        arsort($totals);
        foreach($totals as $track_id => $score){
            $track_ids[] = $track_id;
            $playlist[] = array(
                "track_id" => $track_id,
                "title" => $songs_by_trackid[$track_id]["title"],
                "time_ago" => $songs_by_trackid[$track_id]["time_ago"],
                "timestamp" => $songs_by_trackid[$track_id]["timestamp"],
                "score" => $score
            );
        }
//        echo "<h2>Track ids in volgorde om te posten:</h2>";
//        echo "<strong>" . implode(",",$track_ids) . "</strong><hr>";
//        echo "<h2>Track info</h2>";
//        echo "<pre>";
//        print_r($playlist);
        return $track_ids;
//        echo "</pre><hr>";
        // get requests

    }

}
