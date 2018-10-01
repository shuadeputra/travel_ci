<?php 
    class tiketmodel extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->database();
            
            
        }
        
        
             
        
     public function gettiket() { 
        $sql="SELECT * FROM tiket_tbl ORDER BY tiket_id DESC";
        $query=$this->db->query($sql);
        return $query->result_array();
        
    }
        
        
    }