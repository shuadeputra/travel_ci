<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Glozzom Theme</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/adminstyle.css" media="screen" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.minb.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrapb.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/styleb.css">

  
  
  <!-- Faficon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>img/iconlogo.png">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>img/iconlogo.png">
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>img/iconlogo.png">
  <!-- End Faficon -->
  </head>

    
    <nav class="navbar navbar-expand-sm navbar-dark pinksalem mb-3 fixed-top">
        <div class="container">
          <a class="navbar-brand" href="<?php echo base_url(); ?>home">Traveli</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>home">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>service">Services</a>
                  </li>
                 <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>blog">Blog</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>contact">Contact</a>
                  </li>
              </ul>
            </div>
          </div>
    </nav>
  

<!----- Header ------>
        	<?php 
                if (isset($content_page)) {
                    $this->load->view($content_page);    
                }
            ?>
            
  
  
  
  <!--- Footer ----->

  <footer id="main-footer" class="text-center p-4 pinksalem">
    <div class="container">
      <div class="row">
        <div class="col">
          <p>Copyright 2018 &copy;</p>
        </div>
      </div>
    </div>
  </footer>


  <!-- VIDEO MODAL -->
  <div class="modal fade" id="videoModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
          <iframe src="" height="350" width="100%" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.js"></script>
  <script src="<?php echo base_url(); ?>js/main.js"></script>
</body>
</html>
