 
   <header id="main-header" class="py-2 bg-danger text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1> Contact </h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mr-auto">
          <a href="<?php echo base_url(); ?>contact_form" class="btn btn-light btn-block">
            <i class="fa fa-arrow-left"></i> Back To contact
          </a>
        </div>
      </div>
    </div>
  </section>
  
  <?php if (isset($data_contact)) { ?>

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
       <div class="col-md-8 mr-auto">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Edit Contact</h4>
            </div>
            <div class="card-body">
              <form action="<?php echo base_url(); ?>contact_form/editcontactSubmit" method="post" enctype="multipart/form-data">
               
                <input type="hidden" id="contact_ds_id" name="contact_ds_id" value="<?php echo $data_contact->contact_ds_id; ?>" />
               
                <div class="form-group">
                  <label for="title">Get In Touch</label>
                  <input id="get_in_touch" name="get_in_touch" type="text" class="form-control" value="<?php echo $data_contact->get_in_touch; ?>">
                </div>
                <div class="form-group">
                  <label for="title">Address</label>
                  <input id="address" name="address" type="text" class="form-control" value="<?php echo $data_contact->address; ?>">
                </div>
                <div class="form-group">
                  <label for="title">Email</label>
                  <input id="email" name="email" type="email" class="form-control" value="<?php echo $data_contact->email; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Phone</label>
                  <input id="phone" name="phone" type="number" class="form-control" value="<?php echo $data_contact->phone; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Nama_1</label>
                  <input id="nama_1" name="nama_1" type="text" class="form-control" value="<?php echo $data_contact->nama_1; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Gelar_1</label>
                  <input id="gelar_1" name="gelar_1" type="text" class="form-control" value="<?php echo $data_contact->gelar_1; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Nama_2</label>
                  <input id="nama_2" name="nama_2" type="text" class="form-control" value="<?php echo $data_contact->nama_2; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Gelar_2</label>
                  <input id="gelar_2" name="gelar_2" type="text" class="form-control" value="<?php echo $data_contact->gelar_2; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Nama_3</label>
                  <input id="nama_3" name="nama_3" type="text" class="form-control" value="<?php echo $data_contact->nama_3; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Gelar_3</label>
                  <input id="gelar_3" name="gelar_3" type="text" class="form-control" value="<?php echo $data_contact->gelar_3; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Nama_4</label>
                  <input id="nama_4" name="nama_4" type="text" class="form-control" value="<?php echo $data_contact->nama_4; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Gelar_3</label>
                  <input id="gelar_4" name="gelar_4" type="text" class="form-control" value="<?php echo $data_contact->gelar_4; ?>">
                </div>
              
              <div class="col-md-3">
              <button type="submit" class="btn btn-danger add" >Save Changes</button>
        </div>
           </form>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      
      
       <!--    Bagian ke dua  -->
      <?php if (isset($data_contact)) { ?>
       <div class="col-md-4 mr-auto">
        <div class="col">
          <div class="card">
            <div class="card-header bg-danger text-light">
              <h4>Edit contact Foto</h4>
            </div>
            <div class="card-body">
               <form action="<?php echo base_url(); ?>contact_form/editcontactfoto" method="post" enctype="multipart/form-data">
               
                <input type="hidden" id="contact_ds_id" name="contact_ds_id" value="<?php echo $data_contact->contact_ds_id; ?>" />
               
            <!-- Slider 1  -->
              <div class="form-group">
                
                 <label for="slider_1">Foto 1 (180x180)</label><br>
                 
                 <img src="<?php echo base_url(); ?>img/contact/<?php echo $data_contact->foto_1; ?>" width="200" height="200"/><br><br><br>
                 <input type="hidden" name="gambar_old1" value="<?php echo $data_contact->foto_1; ?>" />
                  <input type="file" name="foto_1" id="foto_1" />
                </div>
                
                <div class="col-md-3">
          <button type="submit" class="btn btn-danger add" >Save Changes</button>
        </div>
                
            <!-- Slider 2  -->
              <div class="form-group">
                
                 <label for="slider_1">foto 2 (180x180)</label><br>
                 
                 <img src="<?php echo base_url(); ?>img/contact/<?php echo $data_contact->foto_2; ?>" width="200" height="200"/><br><br><br>
                 <input type="hidden" name="gambar_old2" value="<?php echo $data_contact->foto_2; ?>" />
                  <input type="file" name="foto_2" id="foto_2" />
                </div>
                
                <div class="col-md-3">
          <button type="submit" class="btn btn-danger add" >Save Changes</button>
        </div>
                
            <!-- Slider 3  -->
              <div class="form-group">
                
                 <label for="slider_1">foto 3 (180x180)</label><br>
                 
                 <img src="<?php echo base_url(); ?>img/contact/<?php echo $data_contact->foto_3; ?>" width="200" height="200"/><br><br><br>
                 <input type="hidden" name="gambar_old3" value="<?php echo $data_contact->foto_3; ?>" />
                  <input type="file" name="foto_3" id="foto_3" />
                </div>
                
                <div class="col-md-3">
          <button type="submit" class="btn btn-danger add" >Save Changes</button>
        </div>
                
            
               <!-- Slider 4  -->
              <div class="form-group">
                
                 <label for="slider_1">foto 4 (180x180)</label><br>
                 
                 <img src="<?php echo base_url(); ?>img/contact/<?php echo $data_contact->foto_4; ?>" width="200" height="200"/><br><br><br>
                 <input type="hidden" name="gambar_old4" value="<?php echo $data_contact->foto_4; ?>" />
                  <input type="file" name="foto_4" id="foto_4" />
                </div>
                
                <div class="col-md-3">
          <button type="submit" class="btn btn-danger add" >Save Changes</button>
        </div>
                
           </form>
            </div>
            </div>
           </div>
          </div>
          <?php } ?>
        </div>
      </div>
  </section>
