<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {

    public function index()
    {
//        session_destroy();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('RequestModel');
        $this->load->model('PlaylistModel');
        $this->load->model('LoginModel');



        $this->form_validation->set_rules('data','Track','required');
        $this->form_validation->set_rules('track_id','Track ID','required');



        if ($this->form_validation->run() === FALSE){
            $this->load->view('request/index');
        }else{
            $this->RequestModel->do_request();
            var_dump($this->PlaylistModel->sendToDeezer(1861142322, $this->RequestModel->getTrackIds()));
            redirect('/request/success', 'location');
        }


    }

    public function create()
    {
        $this->load->library('form_validation');
    }

    public function success()
    {
        $this->load->view('request/success');
    }
}
