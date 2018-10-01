<!-- SEO-->
   <?php foreach($getseo as $row) { ?>
	<title><?php echo $row['title'] ?></title>
	<meta name="description" content="<?php echo $row['keywords'] ?>"/>
	<meta name="keywords" content="<?php echo $row['description'] ?>"/>
  
  
  <?php } ?>
<!--  End SEO-->
  
  
  <!-- SHOWCASE SLIDER -->
  <section id="showcase">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        
             <?php foreach($gethome as $row) { ?>
             <div class="carousel-item active">
              <img class="d-block img-fluid" src="<?php echo base_url(); ?>img/home/<?php echo $row['slider_1'] ?>" alt="First Slide">
             
             
            <div class="container">
            <div class="carousel-caption d-sm-block text-right mb-5">
              <h1 class="display-3"><?php echo $row['judul_atas_1'] ?></h1>
              <p class="lead"><?php echo $row['isi_atas_1'] ?></p>
              <a href="<?php echo $row['readmore_1'] ?>" class="btn btn-dark btn-lg">Sign Up Now</a>
            </div>
          </div>
        </div>

        <div class="carousel-item">
         <img class="d-block img-fluid" src="<?php echo base_url(); ?>img/home/<?php echo $row['slider_2'] ?>" alt="First Slide">
         
         
          <div class="container">
            <div class="carousel-caption d-sm-block mb-5">
              <h1 class="display-3"><?php echo $row['judul_atas_2'] ?></h1>
              <p class="lead"><?php echo $row['isi_atas_2'] ?></p>
              <a href="<?php echo $row['readmore_2'] ?>" class="btn btn-dark btn-lg">Learn More</a>
            </div>
          </div>
        </div>

        <div class="carousel-item">
         <img class="d-block img-fluid" src="<?php echo base_url(); ?>img/home/<?php echo $row['slider_3'] ?>" alt="First Slide">
         
         
          <div class="container">
            <div class="carousel-caption d-sm-block text-right mb-5">
              <h1 class="display-3"><?php echo $row['judul_atas_3'] ?></h1>
              <p class="lead"><?php echo $row['isi_atas_3'] ?></p>
              <a href="<?php echo $row['readmore_3'] ?>" class="btn btn-dark btn-lg">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      
      <?php } ?>

      <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
        <span class="carousel-control-prev-icon"></span>
      </a>

      <a href="#myCarousel" data-slide="next" class="carousel-control-next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>


<?php foreach($gethome as $row) { ?>
  <!-- HOME ICON SECTION -->
  <section id="home-icons" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 text-center">
          <i class="fa fa-cog mb-2"></i>
          <h3><?php echo $row['subjudul1'] ?></h3>
          <p><?php echo $row['isijudul1'] ?></p>
        </div>
        <div class="col-md-4 mb-4 text-center">
          <i class="fa fa-cloud mb-2"></i>
          <h3><?php echo $row['subjudul1'] ?></h3>
          <p><?php echo $row['isijudul1'] ?></p>
        </div>
        <div class="col-md-4 mb-4 text-center">
          <i class="fa fa-cart-plus mb-2"></i>
          <h3><?php echo $row['subjudul3'] ?></h3>
          <p><?php echo $row['isijudul3'] ?></p>
        </div>
      </div>
    </div>
  </section>
  <?php } ?>

  <!-- HOME HEADING SECTION -->
  <?php foreach($gethome as $row) { ?>
  <section id="home-heading" class="p-5">
    <div class="dark-overlay">
      <div class="row">
        <div class="col">
          <div class="container pt-5">
            <h1><?php echo $row['subjudulb'] ?></h1>
            <p class="d-none d-md-block"><?php echo $row['isijudulb'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
    <?php } ?>

  <!-- INFO SECTION -->
  <?php foreach($gethome as $row) { ?>
  <section id="info" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <h3><?php echo $row['aboutus'] ?></h3>
          <p><?php echo $row['isiabout'] ?></p>
          <a href="#" class="btn btn-outline-danger btn-lg">Learn More</a>
        </div>
        <div class="col-md-6">
          <img src="<?php echo base_url(); ?>img/home/<?php echo $row['foto_about'] ?>" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>
  <?php } ?>

<?php foreach($gethome as $row) { ?>
  <!-- VIDEO PLAY SECTION -->
  <section id="video-play">
    <div class="dark-overlay">
      <div class="row">
        <div class="col">
          <div class="container p-5">
            <a
              href="#"
              class="video"
              data-video="<?php echo $row['video'] ?>"
              data-toggle="modal"
              data-target="#videoModal"
            >
              <i class="fa fa-play"></i>
            </a>
            <h1>See What We Do</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
    <?php } ?>


<?php foreach($gethome as $row) { ?>
  <!-- PHOTO GALLERY -->
  <section id="gallery" class="py-5">
    <div class="container">
      <h1 class="text-center">Photo Gallery</h1>
      <p class="text-center">Check out our photos</p>
      <div class="row mb-4">
        <div class="col-md-4">
          <a href="<?php echo base_url(); ?>img/home/<?php echo $row['photo_1'] ?>" data-toggle="lightbox" data-gallery="img-gallery">
            <img src="<?php echo base_url(); ?>img/home/<?php echo $row['photo_1'] ?>" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo base_url(); ?>img/home/<?php echo $row['photo_2'] ?>" data-toggle="lightbox" data-gallery="img-gallery">
            <img src="<?php echo base_url(); ?>img/home/<?php echo $row['photo_2'] ?>" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo base_url(); ?>img/home/<?php echo $row['photo_3'] ?>" data-toggle="lightbox" data-gallery="img-gallery">
            <img src="<?php echo base_url(); ?>img/home/<?php echo $row['photo_3'] ?>" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md-4">
          <a href="<?php echo base_url(); ?>img/home/<?php echo $row['photo_4'] ?>" data-toggle="lightbox" data-gallery="img-gallery">
            <img src="<?php echo base_url(); ?>img/home/<?php echo $row['photo_4'] ?>" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo base_url(); ?>img/home/<?php echo $row['photo_5'] ?>" data-toggle="lightbox" data-gallery="img-gallery">
            <img src="<?php echo base_url(); ?>img/home/<?php echo $row['photo_5'] ?>" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4">
          <a href="<?php echo base_url(); ?>img/home/<?php echo $row['photo_6'] ?>" data-toggle="lightbox" data-gallery="img-gallery">
            <img src="<?php echo base_url(); ?>img/home/<?php echo $row['photo_6'] ?>" class="img-fluid">
          </a>
        </div>
      </div>
    </div>
  </section>
    <?php } ?>

  <!-- NEWSLETTER SECTION -->
  <section id="newsletter" class="text-center p-5 pinksalem text-white">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Subscribe For Our Newsletter</h1>
          <p>Subscribe to get news from Traveli</p>
          <form action="<?php echo base_url(); ?>home/addsubscribe" method="post" enctype="multipart/form-data" class="form-inline justify-content-center">
            <label class="sr-only" for="name">Name</label>
            <input name="nama" id="nama" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Enter Name">

            <label class="sr-only" for="email">Email</label>
            <input name="email" id="email" type="email" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Enter Email">
            <button class="btn btn-dark" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>