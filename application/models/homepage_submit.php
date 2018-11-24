<?php
    session_start();
?>
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class homepage_submit extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function enter_data_into_table() {
        
        $user_id=$_SESSION['id'];
        $status=$_POST['status'];
        
        $data = array(
            'user_id' => $user_id,
            'status' => $status
        );
    
        $query = $this->db->insert('statuses', $data);
        return $query->result();
    }

}

?>