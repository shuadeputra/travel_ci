<?php 
    class about_usmodel extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->database();
            
        }
        
        
        
     public function getabout() {  
        $sql="SELECT * FROM aboutus_tbl ORDER BY id_aboutus DESC";
        $query=$this->db->query($sql);
        return $query->result_array();
        
    }
        
        public function getdetailabout($id_aboutus) {
        $sql="SELECT * FROM aboutus_tbl WHERE id_aboutus=" . $id_aboutus;
        $query=$this->db->query($sql);
        return $query->row();
        
    }
        
    }