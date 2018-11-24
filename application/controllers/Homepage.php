<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
    
    public function main()
    {
        $this->load->view('homepage');
    }
    
    public function db()
    {
        $this->load->model('homepage_submit');
            $r = $this->homepage_submit->enter_data_into_table();
            print_r($r);
    }
}
