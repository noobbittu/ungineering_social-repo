<?php
    defined('BASEPATH') OR exit('no direct access is allowed');
    
    class Dashboard_submit extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }
        public function insert_data_in_table(){
            $data = array(
                'name' => 'name',
                'email' => 'email',
                'college' => 'college',
                'ph_number' => 'phone_number',
                'password' => 'password',  
            );
            $this->db->insert('users',$data);
       }
    }

