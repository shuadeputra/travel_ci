<?php 
 class about_us extends CI_Controller {
	 public function __construct() {
		parent::__construct();
        $this->is_login();
        $this->load->model("about_usmodel");
    
        $uploadconfig["upload_path"]="./img/aboutus/"; 
        $uploadconfig["allowed_types"]="gif|jpg|png";
        $uploadconfig["max_size"]=10240;
        $this->load->library("upload",$uploadconfig);
	 }
     
     	 private function is_login()
     {
        if($this->session->userdata('username')==NULL){
            redirect(base_url().'AdminLogin');
        }    
     }
	 
	 public function index() {
		$data["content_page"]="admin/about_us"; 
        $data['getabout']=$this->about_usmodel->getabout();
		$this->load->view("admin/index",$data); 
	 }
     
     //masukin pos blog
     
     
     public function editabout($id_aboutus=0) {
      if ($id_aboutus>0) {
		$data["content_page"]="admin/details_aboutus";
        $data["data_about"]=$this->about_usmodel->getdetailabout($id_aboutus);
		$this->load->view("admin/index",$data); 
	 }
     
     }
     
     public function editAboutSubmit() {
        $id_aboutus=$_POST["id_aboutus"];
        $judul_besar=$_POST["judul_besar"];
        $isi_besar=$_POST["isi_besar"];
        
        $judul_k1=$_POST["judul_k1"];
        $isi_k1=$_POST["isi_k1"];
        
        $judul_k2=$_POST["judul_k2"];
        $isi_k2=$_POST["isi_k2"];
         
        $judul_k3=$_POST["judul_k3"];
        $isi_k3=$_POST["isi_k3"];
        
        $judul_k4=$_POST["judul_k4"];
        $isi_k4=$_POST["isi_k4"];
        
        $judul_k5=$_POST["judul_k5"];
        $isi_k5=$_POST["isi_k5"];
         
        $judul_k6=$_POST["judul_k6"];
        $isi_k6=$_POST["isi_k6"];
         
        $aboutus_gmbr=$_FILES["aboutus_gmbr"];
        $date = date('Y-m-d H:i:s');
        $gambar_old="./img/aboutus/" . $_POST["gambar_old"]; 
        
          //var_dump($aboutus_gmbr);exit();
        if($aboutus_gmbr['name']!=NULL){
             if($this->upload->do_upload("aboutus_gmbr")) {
                 if (file_exists($gambar_old)) {
                     unlink($gambar_old);
                 }  
                 $aboutus_gmbr=$this->upload->file_name;
            }

            $sql="UPDATE aboutus_tbl SET
             judul_besar='" . $judul_besar . "',
             isi_besar='" . $isi_besar . "',
             judul_k1='" . $judul_k1 . "',
             isi_k1='" . $isi_k1 . "',
             judul_k2='" . $judul_k2 . "',
             isi_k2='" . $isi_k2 . "',
             judul_k3='" . $judul_k3 . "',
             isi_k3='" . $isi_k3 . "',
             judul_k4='" . $judul_k4 . "',
             isi_k4='" . $isi_k4 . "',
             judul_k5='" . $judul_k5 . "',
             isi_k5='" . $isi_k5 . "',
             judul_k6='" . $judul_k6 . "',
             isi_k6='" . $isi_k6 . "',
             aboutus_gmbr='" . $aboutus_gmbr . "',
             date   ='" . $date . "'
             WHERE id_aboutus=" . $id_aboutus;            
        }else{
              $sql="UPDATE aboutus_tbl SET
             judul_besar='" . $judul_besar . "',
             isi_besar='" . $isi_besar . "',
             judul_k1='" . $judul_k1 . "',
             isi_k1='" . $isi_k1 . "',
             judul_k2='" . $judul_k2 . "',
             isi_k2='" . $isi_k2 . "',
             judul_k3='" . $judul_k3 . "',
             isi_k3='" . $isi_k3 . "',
             judul_k4='" . $judul_k4 . "',
             isi_k4='" . $isi_k4 . "',
             judul_k5='" . $judul_k5 . "',
             isi_k5='" . $isi_k5 . "',
             judul_k6='" . $judul_k6 . "',
             isi_k6='" . $isi_k6 . "',
             date   ='" . $date . "'
             WHERE id_aboutus=" . $id_aboutus;                      
        }
         
          
//          echo $sql; exit;
         $query=$this->db->query($sql);
         
         redirect(base_url() . "about_us");
         
         
     }
     
     
     
     
         }