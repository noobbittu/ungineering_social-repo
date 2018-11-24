<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends CI_Model {

    public function __construct() {
        echo'3';
        parent::__construct();
        $this->load->database();//database-will use the database to establish connection.
    }

    public function get_data_from_table() {
        echo "asd";
        $query = $this->db->get('users', 2);
        return $query->result();//$query.results gives the data.
    }

}

?>
