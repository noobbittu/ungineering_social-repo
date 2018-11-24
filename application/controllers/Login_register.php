<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_register extends CI_Controller {

    public function login() {

        $this->load->view('Login_form');
    }

}
