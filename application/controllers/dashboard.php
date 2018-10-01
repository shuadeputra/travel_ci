<?php 
 class dashboard extends CI_Controller {
	 public function __construct() {
		parent::__construct();
        $this->is_login();             
        $this->load->model("subscribemodel");
        $this->load->model("ProductsModel");
        $this->load->model("blogmodel");
        $this->load->model("contactmodal");
        $this->load->model("seomodel");
        $this->load->model("homemodel");
         
         
	    $uploadconfig["upload_path"]="./img/home/"; 
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
		$data["content_page"]="admin/dashboard";
        $data['gethome']=$this->homemodel->gethome();
		$this->load->view("admin/index",$data); 
        
	 }
     
    
       public function edithome($home_id=0) {
      if ($home_id>0) {
		$data["content_page"]="admin/details_home";
        $data["data_home"]=$this->homemodel->getdetailhome($home_id);
		$this->load->view("admin/index",$data); 
	 }
     
     }
     
     
     public function editHomeSubmit() {
        $home_id=$_POST["home_id"];
        $readmore_1=$_POST["readmore_1"];
        $readmore_2=$_POST["readmore_2"];
        $readmore_3=$_POST["readmore_3"];
         
        $judul_atas_1=$_POST["judul_atas_1"];
        $judul_atas_2=$_POST["judul_atas_2"];
        $judul_atas_3=$_POST["judul_atas_3"];
        $isi_atas_1=$_POST["isi_atas_1"];
        $isi_atas_2=$_POST["isi_atas_2"];
        $isi_atas_3=$_POST["isi_atas_3"];
         

        $subjudul1=$_POST["subjudul1"];
        $isijudul1=$_POST["isijudul1"];
         
        $subjudul2=$_POST["subjudul2"];
        $isijudul2=$_POST["isijudul2"];
         
        $subjudul3=$_POST["subjudul3"];
        $isijudul3=$_POST["isijudul3"];
        
        $subjudulb=$_POST["subjudulb"];
        $isijudulb=$_POST["isijudulb"];
         
        $aboutus=$_POST["aboutus"];
        $isiabout=$_POST["isiabout"];  
        $readmore_about=$_POST["readmore_about"];
         
        $video=$_POST["video"];
         
          
        
             $sql="UPDATE home_tbl SET
             readmore_1='" . $readmore_1 . "',
             readmore_2='" . $readmore_2 . "',
             readmore_3='" . $readmore_3 . "',
             subjudul1='" . $subjudul1 . "',
             isijudul1='" . $isijudul1 . "',
             subjudul2='" . $subjudul2 . "',
             isijudul2='" . $isijudul2 . "',
             subjudul3='" . $subjudul3 . "',
             isijudul3='" . $isijudul3 . "',
             subjudulb='" . $subjudulb . "',
             isijudulb='" . $isijudulb . "',
             aboutus='" . $aboutus . "',
             isiabout='" . $isiabout . "',
             judul_atas_1='" . $judul_atas_1 . "',
             judul_atas_2='" . $judul_atas_2 . "',
             judul_atas_3='" . $judul_atas_3 . "',
             isi_atas_1='" . $isi_atas_1 . "',
             isi_atas_2='" . $isi_atas_2 . "',
             isi_atas_3='" . $isi_atas_3 . "',
             readmore_about='" . $readmore_about . "',
             video='". $video . "'
             WHERE home_id=" . $home_id;                       
        
         
          
          //echo $sql; exit;
         $query=$this->db->query($sql);
         
         redirect(base_url() . "dashboard");
         
            
        }
     
     
     
      public function editHomefoto() {
        $home_id=$_POST["home_id"];
        $slider_1=$_FILES["slider_1"];
        $slider_2=$_FILES["slider_2"];
        $slider_3=$_FILES["slider_3"];
        $foto_about=$_FILES["foto_about"];
         
        $photo_1=$_FILES["photo_1"];
        $photo_2=$_FILES["photo_2"];
        $photo_3=$_FILES["photo_3"];
        $photo_4=$_FILES["photo_4"];
        $photo_5=$_FILES["photo_5"];
        $photo_6=$_FILES["photo_6"];
         
        $gambar_old1="./img/home/" . $_POST["gambar_old1"]; 
        $gambar_old2="./img/home/" . $_POST["gambar_old2"]; 
        $gambar_old3="./img/home/" . $_POST["gambar_old3"]; 
        $gambar_old4="./img/home/" . $_POST["gambar_old4"]; 
        $gambar_old5="./img/home/" . $_POST["gambar_old5"]; 
        $gambar_old6="./img/home/" . $_POST["gambar_old6"]; 
        $gambar_old7="./img/home/" . $_POST["gambar_old7"]; 
        $gambar_old8="./img/home/" . $_POST["gambar_old8"]; 
        $gambar_old9="./img/home/" . $_POST["gambar_old9"]; 
        $gambar_old10="./img/home/" . $_POST["gambar_old10"]; 
        
          //var_dump($product_gambar);exit();
        if($slider_1['name']!=NULL){
             if($this->upload->do_upload("slider_1")) {
                 if (file_exists($gambar_old1)) {
                     unlink($gambar_old1);
                 }  
                 $slider_1=$this->upload->file_name;
            }
            
            $sql="UPDATE home_tbl SET
             slider_1='". $slider_1 . "'
             WHERE home_id=" . $home_id;            
        }
         
          
        if($slider_2['name']!=NULL){
             if($this->upload->do_upload("slider_2")) {
                 if (file_exists($gambar_old2)) {
                     unlink($gambar_old2);
                 }  
                 $slider_2=$this->upload->file_name;
            }
            
           $sql="UPDATE home_tbl SET
             slider_2='". $slider_2 . "'
             WHERE home_id=" . $home_id;   
        }
         
        if($slider_3['name']!=NULL){
             if($this->upload->do_upload("slider_3")) {
                 if (file_exists($gambar_old3)) {
                     unlink($gambar_old3);
                 }  
                 $slider_3=$this->upload->file_name;
            }
            
           $sql="UPDATE home_tbl SET
             slider_3='". $slider_3 . "'
             WHERE home_id=" . $home_id;   
        }
         
         if($foto_about['name']!=NULL){
             if($this->upload->do_upload("foto_about")) {
                 if (file_exists($gambar_old4)) {
                     unlink($gambar_old4);
                 }  
                 $foto_about=$this->upload->file_name;
            }
            
           $sql="UPDATE home_tbl SET
             foto_about='". $foto_about . "'
             WHERE home_id=" . $home_id;   
        }
        
         
        if($photo_1['name']!=NULL){
             if($this->upload->do_upload("photo_1")) {
                 if (file_exists($gambar_old5)) {
                     unlink($gambar_old5);
                 }  
                 $photo_1=$this->upload->file_name;
            }
            
           $sql="UPDATE home_tbl SET
             photo_1='". $photo_1 . "'
             WHERE home_id=" . $home_id;   
        }
         
         if($photo_2['name']!=NULL){
             if($this->upload->do_upload("photo_2")) {
                 if (file_exists($gambar_old6)) {
                     unlink($gambar_old6);
                 }  
                 $photo_2=$this->upload->file_name;
            }
            
           $sql="UPDATE home_tbl SET
             photo_2='". $photo_2 . "'
             WHERE home_id=" . $home_id;   
        }
         
         if($photo_3['name']!=NULL){
             if($this->upload->do_upload("photo_3")) {
                 if (file_exists($gambar_old7)) {
                     unlink($gambar_old7);
                 }  
                 $photo_3=$this->upload->file_name;
            }
            
           $sql="UPDATE home_tbl SET
             photo_3='". $photo_3 . "'
             WHERE home_id=" . $home_id;   
        }
         
         
         if($photo_4['name']!=NULL){
             if($this->upload->do_upload("photo_4")) {
                 if (file_exists($gambar_old8)) {
                     unlink($gambar_old8);
                 }  
                 $photo_4=$this->upload->file_name;
            }
            
           $sql="UPDATE home_tbl SET
             photo_4='". $photo_4 . "'
             WHERE home_id=" . $home_id;   
        }
         
         if($photo_5['name']!=NULL){
             if($this->upload->do_upload("photo_5")) {
                 if (file_exists($gambar_old9)) {
                     unlink($gambar_old9);
                 }  
                 $photo_5=$this->upload->file_name;
            }
            
           $sql="UPDATE home_tbl SET
             photo_5='". $photo_5 . "'
             WHERE home_id=" . $home_id;   
        }
         
          
        if($photo_6['name']!=NULL){
             if($this->upload->do_upload("photo_6")) {
                 if (file_exists($gambar_old10)) {
                     unlink($gambar_old10);
                 }  
                 $photo_6=$this->upload->file_name;
            }

            $sql="UPDATE home_tbl SET
             photo_6='". $photo_6 . "'
             WHERE home_id=" . $home_id;            
        }
    
         
          
          //echo $sql; exit;
         $query=$this->db->query($sql);
         
         redirect(base_url() . "dashboard");
         
            
        }
     
     
     
         }