 
<br>
<header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto text-center">
          <h1>About Us</h1>
          <p>All about traveli</p>
        </div>
      </div>
    </div>
  </header>

<?php foreach($getabout as $row) { ?>
  <!-- ABOUT SECTION -->
  <section id="about" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><?php echo $row['judul_besar'] ?></h1>
          <?php echo $row['isi_besar'] ?>
        </div>
        <div class="col-md-6">
          <img src="<?php echo base_url(); ?>img/aboutus/<?php echo $row['aboutus_gmbr'] ?>" alt="" class="about-img img-fluid rounded-circle d-none d-md-block">
        </div>
      </div>
    </div>
  </section>
   <?php } ?>



<?php foreach($getabout as $row) { ?>
  <!-- ICON BOXES -->
  <section id="icon-boxes" class="p-5">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-4">
          <div class="card pinksalem text-center text-white">
            <div class="card-body">
              <i class="fa fa-building"></i>
              <h3><?php echo $row['judul_k1'] ?></h3>
              <?php echo $row['isi_k1'] ?>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card pinksalem text-center text-white">
            <div class="card-body">
              <i class="fa fa-bullhorn"></i>
              <h3><?php echo $row['judul_k2'] ?></h3>
              <?php echo $row['isi_k2'] ?>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card pinksalem text-center text-white">
            <div class="card-body">
              <i class="fa fa-comments"></i>
              <h3><?php echo $row['judul_k3'] ?></h3>
              <?php echo $row['isi_k3'] ?>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md-4">
          <div class="card pinksalem text-center text-white">
            <div class="card-body">
              <i class="fa fa-clock-o"></i>
              <h3><?php echo $row['judul_k4'] ?></h3>
              <?php echo $row['isi_k4'] ?>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card pinksalem text-center text-white">
            <div class="card-body">
              <i class="fa fa-cc"></i>
             <h3><?php echo $row['judul_k5'] ?></h3>
              <?php echo $row['isi_k5'] ?>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card pinksalem text-center text-white">
            <div class="card-body">
              <i class="fa fa-coffee"></i>
              <h3><?php echo $row['judul_k6'] ?></h3>
              <?php echo $row['isi_k6'] ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php }?>


<!--
   STAFF SECTION 
  <section id="staff" class="py-5 text-center bg-dark text-white">
    <div class="container">
      <h1>Our Staff</h1>
      <hr>
      <div class="row">
        <div class="col-md-3">
          <img src="img/person1.jpg" alt="" class="img-fluid rounded-circle mb-2">
          <h4>Jane Doe</h4>
          <small>Marketing Manager</small>
        </div>
        <div class="col-md-3">
          <img src="img/person2.jpg" alt="" class="img-fluid rounded-circle mb-2">
          <h4>Sara Williams</h4>
          <small>Business Manager</small>
        </div>
        <div class="col-md-3">
          <img src="img/person3.jpg" alt="" class="img-fluid rounded-circle mb-2">
          <h4>John Doe</h4>
          <small>CEO</small>
        </div>
        <div class="col-md-3">
          <img src="img/person4.jpg" alt="" class="img-fluid rounded-circle mb-2">
          <h4>Steve Smith</h4>
          <small>Web Developer</small>
        </div>
      </div>
    </div>
  </section>
-->




<!--
   TESTIMONIALS 
  <section id="testimonial-section" class="p-4 bg-dark text-white">
    <div class="container">
      <h2 class="text-center">Testimonials</h2>
      <div class="row">
        <div class="col">
          <div class="slider">
            <div>
              <blockquote class="blockquote">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, sunt!</p>
                <footer class="blockquote-footer">John Doe From <cite title="Company 1">Company 1</cite></footer>
              </blockquote>
            </div>
            <div>
              <blockquote class="blockquote">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, sunt!</p>
                <footer class="blockquote-footer">Steve Smith From <cite title="Company 2">Company 2</cite></footer>
              </blockquote>
            </div>
            <div>
              <blockquote class="blockquote">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, sunt!</p>
                <footer class="blockquote-footer">Megan Williams From <cite title="Company 3">Company 3</cite></footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
-->