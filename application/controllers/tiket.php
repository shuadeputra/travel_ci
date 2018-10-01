<?php 
 class tiket extends CI_Controller {
	 public function __construct() {
		parent::__construct();
         $this->load->model("tiketmodel");
         $this->is_login();
	 }
     
     	 private function is_login()
     {
        if($this->session->userdata('username')==NULL){
            redirect(base_url().'AdminLogin');
        }    
     }
	 
	 public function index() {
		$data["content_page"]="admin/tiket"; 
        $data['gettiket']=$this->tiketmodel->gettiket();
		$this->load->view("admin/index",$data); 
	 }
     
    public function deletetiket($tiket_id) {
         $sql="DELETE FROM tiket_tbl WHERE tiket_id=" . $tiket_id;
         $query=$this->db->query($sql);
         
         redirect(base_url() . "tiket");
     }
     
     
     
     
         }