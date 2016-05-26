<?php

class PlaylistModel extends CI_Model {

    public function sendToDeezer($playlistid,$data)
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

}
