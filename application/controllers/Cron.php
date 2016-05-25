<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cron extends CI_Controller {

    public function update_playlist()
    {
        $this->load->model('RequestModel');

        // get history playlist 1h
        foreach($this->RequestModel->getAll() as $request){
            echo $request->data." - ".$request->track_id."<br/>";
        }

        // get requests
        echo "update playlist";

    }

}