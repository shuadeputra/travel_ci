<?php 
    class blogmodel extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->database();
            
        }
        
    public function getGambarBlog($blog_id=0) {
      $result="";
      if ($blog_id>0) {    
        $sql="SELECT blog_foto FROM blog_tbl WHERE blog_id=" . $blog_id;
        $query=$this->db->query($sql);
        $rows=$query->row();
        $result=$rows->blog_foto;
          
        }
        return $result;
      }
        
        
     public function getblog() {  
        $sql="SELECT * FROM blog_tbl ORDER BY blog_id DESC";
        $query=$this->db->query($sql);
        return $query->result_array();
        
    }
        
        public function getdetailblog($blog_id) {
        $sql="SELECT * FROM blog_tbl WHERE blog_id=" . $blog_id;
        $query=$this->db->query($sql);
        return $query->row();
        
    }
        
        public function gettotalblog() {
        $sql="SELECT * FROM blog_tbl ORDER BY blog_id DESC";
        $query=$this->db->query($sql);
        return $query->num_rows();
        
    } 
        
     public function getblogpage($start=0,$limit=0) {
        if ($limit>0) {
            $sql="SELECT * FROM blog_tbl ORDER BY blog_id DESC LIMIT " . $start . "," . $limit;
            $query=$this->db->query($sql);
            return $query->result_array();
            
        }
        else {
            return NULL;
            
        }
        
    }
        
        
        public function getbloglimit($limit=0) {
        if ($limit>0) {
            $sql="SELECT * FROM blog_tbl ORDER BY blog_id DESC LIMIT " . $limit;
            
        }
        else {
        $sql="SELECT * FROM blog_tbl ORDER BY blog_id DESC";
        }
        $query=$this->db->query($sql);
        return $query->result_array();
        
    }     
        
        
        

        
    }