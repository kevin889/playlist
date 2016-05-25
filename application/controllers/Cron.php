<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cron extends CI_Controller {

    public function update_playlist()
    {
        $this->load->model('RequestModel');
				$this->load->helper('date');
				
        // get history playlist 1h
				
				
				
				/* Get all requests */
				$all_requests = $this->RequestModel->getAll();
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
				echo "<h2>Track ids in volgorde om te posten:</h2>";
				echo "<strong>" . implode(",",$track_ids) . "</strong><hr>";
				echo "<h2>Track info</h2>";
				echo "<pre>";
				print_r($playlist);

				echo "</pre><hr>";
        // get requests

    }

}