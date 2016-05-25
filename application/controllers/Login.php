<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller {
    public function index()
    {

        $this->load->model('LoginModel');




        $data['user'] =             $this->LoginModel->do_login();
        $this->load->view('login',data);


    }

}