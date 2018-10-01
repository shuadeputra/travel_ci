<?php
    class contact extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model("contactmodal");
            
        }
	 
	 public function index() {
		$data["content_page"]="contact"; 
        $data['getcontact2']=$this->contactmodal->getcontact2(); 
		$this->load->view("index",$data); 
	 }
        
        
    //     MASUKIN DATA KE CONTACT
      public function addcontact() {
        $nama=$_POST["nama"];
        $lt_nama=$_POST["lt_nama"];
        $email=$_POST["email"];
        $ph_number=$_POST["ph_number"];
        $massage=$_POST["massage"];
        $date = date('Y-m-d');
        
        
        $sql="INSERT INTO contact_form_tbl(nama,lt_nama,email,ph_number,massage,date) 
         VALUES ('". $nama . "',
         '". $nama . "',
         '". $email . "',
         ". $ph_number . ",
         '" . $massage . "',
         '". $date . "')";
        
    
        $query=$this->db->query($sql);  
        redirect(base_url() . "contact"); 
        
     }
     
     
     
         }    
        