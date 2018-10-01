<?php 
    class contactmodal extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->database();
            
            
        }
          
        
     public function getcontact() { 
        $sql="SELECT * FROM contact_form_tbl ORDER BY contact_id DESC";
        $query=$this->db->query($sql);
        return $query->result_array();
        
    }
        
        
    public function getcontact2() { 
        $sql="SELECT * FROM contact_tbl ORDER BY contact_ds_id DESC";
        $query=$this->db->query($sql);
        return $query->result_array();
        
    }
        
        
    public function getdetailcontact($contact_ds_id) {
        $sql="SELECT * FROM contact_tbl WHERE contact_ds_id=" . $contact_ds_id;
        $query=$this->db->query($sql);
        return $query->row();
        
    }
        
    }