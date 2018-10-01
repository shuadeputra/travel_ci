<?php 
 class blog extends CI_Controller {
	 public function __construct() {
		parent::__construct();
        $this->load->model("subscribemodel"); 
        $this->load->model("contactmodal");
        $this->load->model("indexmodel");
        $this->load->model("blogmodel");
        $this->load->model("ProductsModel");
        $this->load->library("pagination"); 
         
	 }
     
        public function index() {
             $config=array();
            $config["base_url"]=base_url() . "blog";
            $config["per_page"]=6;
            $config["uri_segment"]=2;
            $config["total_rows"]=$this->blogmodel->gettotalblog();

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
            
            $config["cur_tag_open"]="<li class='paging_item paging_item_active'><a href='#'>";
            $config["cur_tag_close"]="</a></li>";
            
            $config["num_tag_open"]="<li class='paging_item'>";
            $config["num_tag_close"]="</li>";

            $this->pagination->initialize($config);

           $start_data=($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

           $data['getblogpage']=$this->blogmodel->getblogpage($start_data,$config["per_page"]); 
             
		      $data["content_page"]="blog_dsc";
		      $this->load->view("index",$data); 
            }
     
     
//    public function blog_detail($blog_id=0) {
//      if ($blog_id>0) {
//          
//           $config=array();
//            $config["base_url"]=base_url() . "blog_detail/" .  $blog_id . "/";
//            $config["per_page"]=4;
//            $config["uri_segment"]=3;
//            $config["total_rows"]=$this->blogmodel->gettotalblog();
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
//           $data['getblogpage']=$this->blogmodel->getblogpage($start_data,$config["per_page"]); 
//          
//		$data["content_page"]="blog_dsc";
//        $data["data_blog"]=$this->blogmodel->getdetailblog($blog_id);
//		$this->load->view("index",$data); 
//	 }
//	 
//        
//        }
     
     
     
             public function blog_detail($blog_id) {
            $data["content_page"]="blog_sd";
            $data['getbloglimit']=$this->blogmodel->getbloglimit(5);
            $data["blog_data"]=$this->blogmodel->getdetailblog($blog_id);
            $data['getproducts']=$this->ProductsModel->getproducts(6);
            $this->load->view("index",$data);
        }
     
     
 }
     