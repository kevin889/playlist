<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {

    public function index()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Requestmodel');

        $this->form_validation->set_rules('data','Song','required');
        if ($this->form_validation->run() === FALSE){
            $this->load->view('request');
        }else{
            $this->Requestmodel->do_request();
            echo "goeie";
        }


    }

    public function create()
    {
        $this->load->library('form_validation');


    }
}
