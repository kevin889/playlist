<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Current extends CI_Controller {

    public function index()
    {
        $this->load->view('current');
    }
}
