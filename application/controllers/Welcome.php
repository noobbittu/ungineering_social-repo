<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $this->load->view('welcome_message');
    }

    public function abc($a, $b) {
        echo $a;
        echo $b;
        $my_name = "Bittu";
        $this->load->view('abc', array('name' => $my_name));
    }

    public function db() {
        echo "1";
        $this->load->model('test_model'); //here is constructor is being called
        echo "2";
        $r = $this->test_model->get_data_from_table();
        print_r($r);
    }
}
