<?php

defined('BASEPATH') OR exit('no direct script allowed');

class Dashboard extends CI_Controller {

    public function D_page() {
        $this->load->helper('url');
        $this->load->view('Dashboard');
    }
    public function db(){
        $this->load->model('Dashboard_submit');
    }

}
