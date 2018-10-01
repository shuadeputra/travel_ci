  
   
   
   <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-gear"></i> Dashboard</h1>
        </div>
      </div>
    </div>
  </header>
  <br>
  
  



  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="card text-center bg-primary text-white mb-3">
            <div class="card-body">
              <h3>Posts Product</h3>
              <h1 class="display-4">
                <i class="fa fa-pencil"></i> <?php $query = $this->db->query('SELECT * FROM product_tbl'); echo $query->num_rows(); ?>
              </h1>
              <a href="<?php echo base_url(); ?>posts" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>
          
          
          <div class="card text-center bg-success text-white mb-3">
            <div class="card-body">
              <h3>Posts Blog</h3>
              <h1 class="display-4">
                <i class="fa fa-pencil"></i> <?php $query = $this->db->query('SELECT * FROM blog_tbl'); echo $query->num_rows(); ?>
              </h1>
              <a href="<?php echo base_url(); ?>posts_blog" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>

          <div class="card text-center bg-danger text-white mb-3">
            <div class="card-body">
              <h3>Contact Form</h3>
              <h1 class="display-4">
                <i class="fa fa-folder-open-o"></i> <?php $query = $this->db->query('SELECT * FROM contact_form_tbl'); echo $query->num_rows(); ?>
                
              </h1>
              <a href="<?php echo base_url(); ?>contact_form" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>
          </div>
          
          
        <div class="col-md-3">
          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Subscribe</h3>
              <h1 class="display-4">
                <i class="fa fa-users"></i> <?php $query = $this->db->query('SELECT * FROM subscribe_tbl'); echo $query->num_rows(); ?>
              </h1>
              <a href="<?php echo base_url(); ?>subscribe" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>
          
          <div class="card text-center bg-info text-white mb-3">
            <div class="card-body">
              <h3>Seo</h3>
              <h1 class="display-4">
                <i class="fa fa-pencil"></i> <?php $query = $this->db->query('SELECT * FROM seo_tbl'); echo $query->num_rows(); ?>
              </h1>
              <a href="<?php echo base_url(); ?>posts_seo" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>
          
          <div class="card text-center bg-dark text-white mb-3">
            <div class="card-body">
              <h3>About Us</h3>
              <h1 class="display-4">
                <i class="fa fa-pencil"></i> <?php $query = $this->db->query('SELECT * FROM aboutus_tbl'); echo $query->num_rows(); ?>
              </h1>
              <a href="<?php echo base_url(); ?>about_us" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>
        </div>
        
        
        <div class="col-md-6">
        
         <hr>
          <h1 style=" text-align:center;">Hallo Welcome <?php if($this->session->has_userdata("username")) { ?><?php echo $this->session->userdata("username"); ?><?php } ?></h1>
          <hr>
          
        <div class="card text-center bg-dark text-white mb-3">
            <div class="card-body">
              <h3>Edit Home</h3>
              <h1 class="display-2">
                <i class="fa fa-plus"></i> 
              </h1>
              <?php foreach($gethome as $row) { ?>
              <a href="<?php echo base_url(); ?>dashboard/edithome/<?php echo $row["home_id"]; ?>" class="btn btn-outline-light btn-sm">
              View</a>
                <?php } ?>          
            </div>
          </div>
          
          <div class="card text-center bg-danger text-white mb-3">
            <div class="card-body">
              <h3>Tiket</h3>
              <h1 class="display-4">
                <i class="fa fa-pencil"></i> <?php $query = $this->db->query('SELECT * FROM tiket_tbl'); echo $query->num_rows(); ?>
              </h1>
              <a href="<?php echo base_url(); ?>tiket" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>
          
          </div>
        
        
        
      </div>
    </div>
  </section>
  





