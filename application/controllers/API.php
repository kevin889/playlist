<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class API extends CI_Controller {

    public function search()
    {
        if(!isset($_POST['data'])) return false;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://api.deezer.com/search?q=".$_POST['data']."&order=RANKING");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        $output = json_decode($output, true);
        echo json_encode(array_slice($output['data'], 0, 5));
    }
}
