<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {

    public function index()
    {
        //session_destroy();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Requestmodel');
        $this->load->model('LoginModel');



        $this->form_validation->set_rules('data','Track','required');
        $this->form_validation->set_rules('track_id','Track ID','required');



        if ($this->form_validation->run() === FALSE){
            $this->load->view('request/index');
        }else{
            $this->Requestmodel->do_request();
            redirect('/request/success', 'refresh');
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
