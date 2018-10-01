<?php
    class about extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model("about_usmodel");
            
        }
	 
	 public function index() {
		$data["content_page"]="about"; 
        $data['getabout']=$this->about_usmodel->getabout();
		$this->load->view("index",$data); 
	 }
    }