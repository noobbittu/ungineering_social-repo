<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends CI_Model {

    public function __construct() {
        echo "3";
        parent::__construct();
        $this->load->database();
    }

    public function get_data_from_table() {
        echo "asd";
        $query = $this->db->get('users', 2); //$querry stores a object pointer
        //We pass two parameters, one is name of table and other is number of rows
        return $query->result(); //$querry->result() stores a associative array
    }

}

?>