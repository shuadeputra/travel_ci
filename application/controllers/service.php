<?php
    class service extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model("ProductsModel");
            $this->load->library("pagination");
            
        }
	 
	 public function index() {
         $config=array();
            $config["base_url"]=base_url() . "service";
            $config["per_page"]=4;
            $config["uri_segment"]=2;
            $config["total_rows"]=$this->ProductsModel->gettotalproduk();

            $config["full_tag_open"]="<ul>";
            $config["full_tag_close"]="</ul>";
            
            $config["first_tag_open"]="<li class='paging_item'>";
            $config["first_link"]="&lt;&lt;";
         
            $config["first_tag_close"]="</li>";
            
            $config["last_tag_open"]="<li class='paging_item'>";
            $config["last_link"]="&gt;&gt;";
            $config["last_tag_close"]="</li>";
            
            $config["prev_tag_open"]="<li class='paging_item'>";
            $config["prev_link"]="&lt;";
            $config["prev_tag_close"]="</li>";
            
            $config["next_tag_open"]="<li class='paging_item'>";
            $config["next_link"]="&gt;";
            $config["next_tag_close"]="</li>";
            
            $config["cur_tag_open"]="<li class='paging_item paging_item_active'>";
            $config["cur_tag_close"]="</a></li>";
            
            $config["num_tag_open"]="<li class='paging_item'>";
            $config["num_tag_close"]="</li>";

            $this->pagination->initialize($config);

           $start_data=($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

           $data['getprodukpage']=$this->ProductsModel->getprodukpage($start_data,$config["per_page"]);
          
         
         
		          $data["content_page"]="service"; 
                  $data['getproducts']=$this->ProductsModel->getproducts(4);
     	          $this->load->view("index",$data); 
	 }
        
        
        
//    public function product_detail($product_id=0) {
//      if ($product_id>0) {
//          
//           $config=array();
//            $config["base_url"]=base_url() . "product_detail/" .  $product_id . "/";
//            $config["per_page"]=4;
//            $config["uri_segment"]=2;
//            $config["total_rows"]=$this->ProductsModel->gettotalproduk();
//
//            $config["full_tag_open"]="<ul>";
//            $config["full_tag_close"]="</ul>";
//            
//            $config["first_tag_open"]="<li class='paging_item'>";
//            $config["first_link"]="&lt;&lt;";
//            $config["first_tag_close"]="</li>";
//            
//            $config["last_tag_open"]="<li class='paging_item'>";
//            $config["last_link"]="&gt;&gt;";
//            $config["last_tag_close"]="</li>";
//            
//            $config["prev_tag_open"]="<li class='paging_item'>";
//            $config["prev_link"]="&lt;";
//            $config["prev_tag_close"]="</li>";
//            
//            $config["next_tag_open"]="<li class='paging_item'>";
//            $config["next_link"]="&gt;";
//            $config["next_tag_close"]="</li>";
//            
//            $config["cur_tag_open"]="<li class='paging_item paging_item_active'><a href='#'>";
//            $config["cur_tag_close"]="</a></li>";
//            
//            $config["num_tag_open"]="<li class='paging_item'>";
//            $config["num_tag_close"]="</li>";
//
//            $this->pagination->initialize($config);
//
//           $start_data=($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
//
//           $data['getprodukpage']=$this->ProductsModel->getprodukpage($start_data,$config["per_page"]);
//          
//		$data["content_page"]="ditel_produk";
//        $data["data_product"]=$this->ProductsModel->gettotalproduct($product_id);
//		$this->load->view("index",$data); 
//	 }
//        
//    }
        
        
        
    public function addtiket() {
        $nama_paket=$_POST["nama_paket"];
        $jumlah=$_POST["jumlah"];
        $nomor_tlp=$_POST["nomor_tlp"];
        $nama=$_POST["nama"];
        $email=$_POST["email"];
        $tanggal = date('Y-m-d');
        
        
        $sql="INSERT INTO tiket_tbl(nama_paket,jumlah,nomor_tlp,nama,email,tanggal) 
         VALUES (
         '". $nama_paket . "',
         ". $jumlah . ",
         ". $nomor_tlp . ",
         '". $nama . "',
         '". $email . "',
         '". $tanggal . "')";
        
    
        $query=$this->db->query($sql);  
        redirect(base_url() . "service"); 
        
     }
        
        
        
        
    }

        