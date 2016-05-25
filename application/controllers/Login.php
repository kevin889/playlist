<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller {
    public function index()
    {

        $this->load->model('LoginModel');

        $data['title'] = 'Login';
        $data['user'] = $this->LoginModel->do_login();

        $this->load->view('login',$data);
    }

    public function save()
    {
        $this->load->model('LoginModel');
        $this->LoginModel->save_login();
        
        var_dump($this->LoginModel->get_user());
    }

}