<?php 
    class homemodel extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->database();
            
        }
        
     public function gethome() {  
        $sql="SELECT * FROM home_tbl ORDER BY home_id DESC";
        $query=$this->db->query($sql);
        return $query->result_array();
        
    }
        
        public function getdetailhome($home_id) {
        $sql="SELECT * FROM home_tbl WHERE home_id=" . $home_id;
        $query=$this->db->query($sql);
        return $query->row();
        
    }
        
    }