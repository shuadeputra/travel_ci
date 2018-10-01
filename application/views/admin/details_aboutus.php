 <header id="main-header" class="py-2 bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-users"></i> About us</h1>
        </div>
      </div>
    </div>
  </header>
  
    <!-- ACTIONS -->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mr-auto">
          <a href="<?php echo base_url(); ?>about_us" class="btn btn-light btn-block">
            <i class="fa fa-arrow-left"></i> Back To About us
          </a>
        </div>
      </div>
    </div>
  </section>
  
  
  

  
<?php if (isset($data_about)) { ?>

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Edit About us</h4>
            </div>
            <div class="card-body">
               <form action="<?php echo base_url(); ?>about_us/editAboutSubmit" method="post" enctype="multipart/form-data">
               
               <input type="hidden" name="id_aboutus" value="<?php echo $data_about->id_aboutus; ?>" />
               
            <!--JUDUL BESAR-->
                <div class="form-group">
                  <label for="title">Judul Besar</label>
                  <input id="judul_besar" name="judul_besar" type="text" class="form-control" value="<?php echo $data_about->judul_besar; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Deskripsi</label>
                  <textarea name="isi_besar" id="editor1" class="form-control"><?php echo $data_about->isi_besar; ?></textarea>
                </div>
                
                <!--JUDUL KECIL 1-->
                <div class="form-group">
                  <label for="title">Judul k 1</label>
                  <input id="judul_k1" name="judul_k1" type="text" class="form-control" value="<?php echo $data_about->judul_k1; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Isi k 1</label>
                  <input id="isi_k1" name="isi_k1" type="text" class="form-control" value="<?php echo $data_about->isi_k1; ?>">
                </div>
                
                <!--JUDUL KECIL 2-->
                <div class="form-group">
                  <label for="title">Judul k 2</label>
                  <input id="judul_k2" name="judul_k2" type="text" class="form-control" value="<?php echo $data_about->judul_k2; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Isi k 2</label>
                  <input id="isi_k2" name="isi_k2" type="text" class="form-control" value="<?php echo $data_about->isi_k2; ?>">
                </div>
                
                <!--JUDUL KECIL 3-->
                <div class="form-group">
                  <label for="title">Judul k 3</label>
                  <input id="judul_k3" name="judul_k3" type="text" class="form-control" value="<?php echo $data_about->judul_k3; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Isi k 3</label>
                  <input id="isi_k3" name="isi_k3" type="text" class="form-control" value="<?php echo $data_about->isi_k3; ?>">
                </div>
                
                <!--JUDUL KECIL 4-->
                <div class="form-group">
                  <label for="title">Judul k 4</label>
                  <input id="judul_k4" name="judul_k4" type="text" class="form-control" value="<?php echo $data_about->judul_k4; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Isi k 4</label>
                  <input id="isi_k4" name="isi_k4" type="text" class="form-control" value="<?php echo $data_about->isi_k4; ?>">
                </div>
                
                <!--JUDUL KECIL 5-->
                <div class="form-group">
                  <label for="title">Judul k 5</label>
                  <input id="judul_k5" name="judul_k5" type="text" class="form-control" value="<?php echo $data_about->judul_k5; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Isi k 5</label>
                  <input id="isi_k5" name="isi_k5" type="text" class="form-control" value="<?php echo $data_about->isi_k5; ?>">
                </div>
                
                <!--JUDUL KECIL 6-->
                <div class="form-group">
                  <label for="title">Judul k 6</label>
                  <input id="judul_k6" name="judul_k6" type="text" class="form-control" value="<?php echo $data_about->judul_k6; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Isi k 6</label>
                  <input id="isi_k6" name="isi_k6" type="text" class="form-control" value="<?php echo $data_about->isi_k6; ?>">
                </div>
               
                
                <div class="form-group">
                
                 <label for="blog_foto">Attachments (400x400)</label><br>
                 
                 <img src="<?php echo base_url(); ?>img/aboutus/<?php echo $data_about->aboutus_gmbr; ?>" width="200" height="200"/><br><br><br><br><br>
                 <input type="hidden" name="gambar_old" value="<?php echo $data_about->aboutus_gmbr; ?>" />
                  <input type="file" name="aboutus_gmbr" id="aboutus_gmbr" />
                </div>
              
              <div class="col-md-3">
          <button type="submit" class="btn btn-success add" >Save Changes</button>
        </div>
           </form>
            </div>
          </div>
        </div>
      </div>
    </div>
        <?php } ?>
  </section>