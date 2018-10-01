<?php 
 class contact_form extends CI_Controller {
	 public function __construct() {
		parent::__construct();
        $this->is_login();
        $this->load->model("contactmodal");
         
         $uploadconfig["upload_path"]="./img/contact/"; 
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
		$data["content_page"]="admin/contact_form"; 
        $data['getcontact']=$this->contactmodal->getcontact();
        $data['getcontact2']=$this->contactmodal->getcontact2(); 
		$this->load->view("admin/index",$data); 
	 }
     
     
     /*edit contact*/
     
     public function editcontact($contact_ds_id=0) {
      if ($contact_ds_id>0) {
		$data["content_page"]="admin/details_contact";
        $data["data_contact"]=$this->contactmodal->getdetailcontact($contact_ds_id);
		$this->load->view("admin/index",$data); 
	 }
     
     
      }
     
      public function editcontactSubmit() {
        $contact_ds_id=$_POST["contact_ds_id"];
        $get_in_touch=$_POST["get_in_touch"];
        $address=$_POST["address"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $nama_1=$_POST["nama_1"];
        $gelar_1=$_POST["gelar_1"];
        $nama_2=$_POST["nama_2"];
        $gelar_2=$_POST["gelar_2"];
        $nama_3=$_POST["nama_3"];
        $gelar_3=$_POST["gelar_3"];
        $nama_4=$_POST["nama_4"];
        $gelar_4=$_POST["gelar_4"];
           
              
            $sql="UPDATE contact_tbl SET
             get_in_touch='" . $get_in_touch . "',
             address='" . $address . "',
             email='" . $email . "',
             phone=" . $phone . ",
             nama_1='" . $nama_1 . "',
             gelar_1='" . $gelar_1 . "',
             nama_2='" . $nama_2 . "',
             gelar_2='" . $gelar_2 . "',
             nama_3='" . $nama_3 . "',
             gelar_3='" . $gelar_3 . "',
             nama_4='" . $nama_4 . "',
             gelar_4='" . $gelar_4 . "'
            
             WHERE contact_ds_id=" . $contact_ds_id;          
          
          
          
          //echo $sql; exit;
         $query=$this->db->query($sql);
         
         redirect(base_url() . "contact_form");
         
         
     }
     
     
     
           public function editcontactfoto() {
        $contact_ds_id=$_POST["contact_ds_id"];
        $foto_1=$_FILES["foto_1"];
        $foto_2=$_FILES["foto_2"];
        $foto_3=$_FILES["foto_3"];
        $foto_4=$_FILES["foto_4"];       

        
          //var_dump($product_gambar);exit();
        if($foto_1['name']!=NULL){
             if($this->upload->do_upload("foto_1")) {
                 if (file_exists($gambar_old1)) {
                     unlink($gambar_old1);
                 }  
                 $foto_1=$this->upload->file_name;
            }
            
            $sql="UPDATE contact_tbl SET
             foto_1='". $foto_1 . "'
             WHERE contact_ds_id=" . $contact_ds_id;            
        }
         
          
        if($foto_2['name']!=NULL){
             if($this->upload->do_upload("foto_2")) {
                 if (file_exists($gambar_old2)) {
                     unlink($gambar_old2);
                 }  
                 $foto_2=$this->upload->file_name;
            }
            
           $sql="UPDATE contact_tbl SET
             foto_2='". $foto_2 . "'
             WHERE contact_ds_id=" . $contact_ds_id;   
        }
         
        if($foto_3['name']!=NULL){
             if($this->upload->do_upload("foto_3")) {
                 if (file_exists($gambar_old3)) {
                     unlink($gambar_old3);
                 }  
                 $foto_3=$this->upload->file_name;
            }
            
           $sql="UPDATE contact_tbl SET
             foto_3='". $foto_3 . "'
             WHERE contact_ds_id=" . $contact_ds_id;   
        }
               
        if($foto_4['name']!=NULL){
             if($this->upload->do_upload("foto_4")) {
                 if (file_exists($gambar_old4)) {
                     unlink($gambar_old4);
                 }  
                 $foto_4=$this->upload->file_name;
            }
            
           $sql="UPDATE contact_tbl SET
             foto_4='". $foto_4 . "'
             WHERE contact_ds_id=" . $contact_ds_id;   
        }
    
         
          
          //echo $sql; exit;
         $query=$this->db->query($sql);
         
         redirect(base_url() . "contact_form");
         
            
        }
     
     
     
     
     public function deletecontact($contact_id) {
         $sql="DELETE FROM contact_form_tbl WHERE contact_id=" . $contact_id;
         $query=$this->db->query($sql);
         
         redirect(base_url() . "contact_form");
     }
     
         }
