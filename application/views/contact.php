  <br>
   <header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto text-center">
          <h1>Contact Us</h1>
          <p>Our Traveli contact.</p>
        </div>
      </div>
    </div>
  </header>


<?php foreach($getcontact2 as $rows) { ?>
  <!-- CONTACT SECTION -->
  <section id="contact" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card p-4">
            <div class="card-body">
              <h4>Get In Touch</h4>
              <p style="text-align:center"><?php echo $rows['get_in_touch'] ?></p>
              <h4>Address</h4>
              <p style="text-align:center"><?php echo $rows['address'] ?></p>
              <h4>Email</h4>
              <p style="text-align:center"><?php echo $rows['email'] ?></p>
              <h4>Phone</h4>
              <p style="text-align:center"><?php echo $rows['phone'] ?></p>
            </div>
          </div>
        </div>
        
<?php } ?>
        
           
        <div class="col-md-8">
          <div class="card p-4">
            <div class="card-body">
             <form action="<?php echo base_url(); ?>contact/addcontact" method="post" enctype="multipart/form-data">
              <h3 class="text-center">Please fill out this form to contact us</h3>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="nama" type="text" class="form-control" placeholder="First Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="lt_nama" type="text" class="form-control" placeholder="Last Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="ph_number" type="number" class="form-control" placeholder="Phone Number">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea name="massage" class="form-control" placeholder="Message"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <input type="submit" class="btn pinksalem text-light btn-block">
                </div>
                  
              </div>
              </form>
              
            </div>
          </div>
        </div>

    </div>
    </div>
    
  </section>
  
  
  <?php foreach($getcontact2 as $rows) { ?>
    <!-- STAFF SECTION -->
  <section id="staff" class="py-5 text-center pinksalem text-white">
    <div class="container">
      <h1>OUR STAFF</h1>
      <hr>
      <div class="row">
        <div class="col-md-3">
          <img src="<?php echo base_url(); ?>img/contact/<?php echo $rows['foto_1'] ?>" alt="" class="img-fluid rounded-circle mb-2">
          <h4><?php echo $rows['nama_1'] ?></h4>
          <small><?php echo $rows['gelar_1'] ?></small>
        </div>
        <div class="col-md-3">
          <img src="<?php echo base_url(); ?>img/contact/<?php echo $rows['foto_2'] ?>" alt="" class="img-fluid rounded-circle mb-2">
          <h4><?php echo $rows['nama_2'] ?></h4>
          <small><?php echo $rows['gelar_2'] ?></small>
        </div>
        <div class="col-md-3">
          <img src="<?php echo base_url(); ?>img/contact/<?php echo $rows['foto_3'] ?>" alt="" class="img-fluid rounded-circle mb-2">
          <h4><?php echo $rows['nama_3'] ?></h4>
          <small><?php echo $rows['gelar_3'] ?></small>
        </div>
        <div class="col-md-3">
          <img src="<?php echo base_url(); ?>img/contact/<?php echo $rows['foto_4'] ?>" alt="" class="img-fluid rounded-circle mb-2">
          <h4><?php echo $rows['nama_4'] ?></h4>
          <small><?php echo $rows['gelar_4'] ?></small>
        </div>
      </div>
    </div>
  </section>
  <?php } ?>