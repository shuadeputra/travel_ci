 <header id="main-header" class="py-2 bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-users"></i> DashBoard</h1>
        </div>
      </div>
    </div>
  </header>
  
    <!-- ACTIONS -->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mr-auto">
          <a href="<?php echo base_url(); ?>dashboard" class="btn btn-light btn-block">
            <i class="fa fa-arrow-left"></i> Back To Dashboard
          </a>
        </div>
      </div>
    </div>
  </section>
  
<?php if (isset($data_home)) { ?>

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
       <div class="col-md-8 mr-auto">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Edit Dashboard</h4>
            </div>
            <div class="card-body">
               <form action="<?php echo base_url(); ?>dashboard/editHomeSubmit" method="post" enctype="multipart/form-data">
               
               <input type="hidden" name="home_id" value="<?php echo $data_home->home_id; ?>" />
               
            <!-- Slider 1  -->
                
               <div class="form-group">
                  <label for="title">readmore_1</label>
                  <input id="readmore_1" name="readmore_1" type="text" class="form-control" value="<?php echo $data_home->readmore_1; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Judul_atas_1</label>
                  <input id="judul_atas_1" name="judul_atas_1" type="text" class="form-control" value="<?php echo $data_home->judul_atas_1; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Isi_atas_1</label>
                  <input id="isi_atas_1" name="isi_atas_1" type="text" class="form-control" value="<?php echo $data_home->isi_atas_1; ?>">
                </div>
                
            <!-- Slider 2  -->
                
               <div class="form-group">
                  <label for="title">readmore_2</label>
                  <input id="readmore_2" name="readmore_2" type="text" class="form-control" value="<?php echo $data_home->readmore_2; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Judul_atas_2</label>
                  <input id="judul_atas_2" name="judul_atas_2" type="text" class="form-control" value="<?php echo $data_home->judul_atas_2; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Isi_atas_2</label>
                  <input id="isi_atas_2" name="isi_atas_2" type="text" class="form-control" value="<?php echo $data_home->isi_atas_2; ?>">
                </div>
                
            <!-- Slider 3  -->
                
               <div class="form-group">
                  <label for="title">readmore_3</label>
                  <input id="readmore_3" name="readmore_3" type="text" class="form-control" value="<?php echo $data_home->readmore_3; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Judul_atas_2</label>
                  <input id="judul_atas_3" name="judul_atas_3" type="text" class="form-control" value="<?php echo $data_home->judul_atas_3; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Isi_atas_3</label>
                  <input id="isi_atas_3" name="isi_atas_3" type="text" class="form-control" value="<?php echo $data_home->isi_atas_3; ?>">
                </div>
               
               
                <!--JUDUL kecil 1-->
                <div class="form-group">
                  <label for="title">subjudul1</label>
                  <input id="subjudul1" name="subjudul1" type="text" class="form-control" value="<?php echo $data_home->subjudul1; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">isijudul1</label>
                  <input id="isijudul1" name="isijudul1" type="text" class="form-control" value="<?php echo $data_home->isijudul1; ?>">
                </div>
               
               <!--JUDUL kecil 2-->
                <div class="form-group">
                  <label for="title">subjudul2</label>
                  <input id="subjudul2" name="subjudul2" type="text" class="form-control" value="<?php echo $data_home->subjudul2; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">isijudul2</label>
                  <input id="isijudul2" name="isijudul2" type="text" class="form-control" value="<?php echo $data_home->isijudul2; ?>">
                </div>
               
               <!--JUDUL kecil 3-->
                <div class="form-group">
                  <label for="title">subjudul3</label>
                  <input id="subjudul3" name="subjudul3" type="text" class="form-control" value="<?php echo $data_home->subjudul3; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">isijudul3</label>
                  <input id="isijudul3" name="isijudul3" type="text" class="form-control" value="<?php echo $data_home->isijudul3; ?>">
                </div>
               
               
                <!--JUDUL Besar-->
                <div class="form-group">
                  <label for="title">Sub judul B</label>
                  <input id="subjudulb" name="subjudulb" type="text" class="form-control" value="<?php echo $data_home->subjudulb; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Isi judul B</label>
                  <input id="isijudulb" name="isijudulb" type="text" class="form-control" value="<?php echo $data_home->isijudulb; ?>">
                </div>
                
                
                <!--About Us Home-->
                <div class="form-group">
                  <label for="title">Aboutus</label>
                  <input id="aboutus" name="aboutus" type="text" class="form-control" value="<?php echo $data_home->aboutus; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Isi About</label>
                  <input id="isiabout" name="isiabout" type="text" class="form-control" value="<?php echo $data_home->isiabout; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Readmore About</label>
                  <input id="readmore_about" name="readmore_about" type="text" class="form-control" value="<?php echo $data_home->readmore_about; ?>">
                </div>
                
                 
                <!--Video -->
                 <div class="form-group">
                  <label for="title">Video</label>
                  <input id="rvideo" name="video" type="text" class="form-control" value="<?php echo $data_home->video; ?>">
                </div>
                

              <div class="col-md-3">
          <button type="submit" class="btn btn-dark add" >Save Changes</button>
        </div>
           </form>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      
      
      <!--    Bagian ke dua  -->
      <?php if (isset($data_home)) { ?>
       <div class="col-md-4 mr-auto">
        <div class="col">
          <div class="card">
            <div class="card-header bg-dark text-light">
              <h4>Edit Dashboard Foto</h4>
            </div>
            <div class="card-body">
               <form action="<?php echo base_url(); ?>dashboard/editHomefoto" method="post" enctype="multipart/form-data">
               
               <input type="hidden" name="home_id" value="<?php echo $data_home->home_id; ?>" />
               
            <!-- Slider 1  -->
              <div class="form-group">
                
                 <label for="slider_1">Slider 1 </label><br>
                 
                 <img src="<?php echo base_url(); ?>img/home/<?php echo $data_home->slider_1; ?>" width="200" height="200"/><br><br><br><br>
                 <input type="hidden" name="gambar_old1" value="<?php echo $data_home->slider_1; ?>" />
                  <input type="file" name="slider_1" id="slider_1" />
                </div>
                
                <div class="col-md-3">
          <button type="submit" class="btn btn-dark add" >Save Changes</button>
        </div>
                
            <!-- Slider 2  -->
              <div class="form-group">
                
                 <label for="slider_1">Slider 2 </label><br>
                 
                 <img src="<?php echo base_url(); ?>img/home/<?php echo $data_home->slider_2; ?>" width="200" height="200"/><br><br><br><br>
                 <input type="hidden" name="gambar_old2" value="<?php echo $data_home->slider_2; ?>" />
                  <input type="file" name="slider_2" id="slider_2" />
                </div>
                
                <div class="col-md-3">
          <button type="submit" class="btn btn-dark add" >Save Changes</button>
        </div>
                
            <!-- Slider 3  -->
              <div class="form-group">
                
                 <label for="slider_1">Slider 3 </label><br>
                 
                 <img src="<?php echo base_url(); ?>img/home/<?php echo $data_home->slider_3; ?>" width="200" height="200"/><br><br><br><br>
                 <input type="hidden" name="gambar_old3" value="<?php echo $data_home->slider_3; ?>" />
                  <input type="file" name="slider_3" id="slider_3" />
                </div>
                
                <div class="col-md-3">
          <button type="submit" class="btn btn-dark add" >Save Changes</button>
        </div>
                
                
                <div class="form-group">
                
                 <label for="slider_1">Foto About us (wajib PNG)</label><br>
                 
                 <img src="<?php echo base_url(); ?>img/home/<?php echo $data_home->foto_about; ?>" width="200" height="200"/><br><br><br><br>
                 <input type="hidden" name="gambar_old4" value="<?php echo $data_home->slider_2; ?>" />
                  <input type="file" name="foto_about" id="foto_about" />
                </div>
                                
                <div class="col-md-3">
          <button type="submit" class="btn btn-dark add" >Save Changes</button>
        </div>                

                                
                <!--Foto 6 buah-->
                
                <div class="form-group">
                 <label for="blog_foto">Foto 1 (size:600x600)</label><br>
                 <img src="<?php echo base_url(); ?>img/home/<?php echo $data_home->photo_1; ?>" width="200" height="200"/><br><br><br><br>
                 <input type="hidden" name="gambar_old5" value="<?php echo $data_home->photo_1; ?>" />
                  <input type="file" name="photo_1" id="photo_1" />
                </div>
                
                <div class="col-md-3">
          <button type="submit" class="btn btn-dark add" >Save Changes</button>
        </div>
                
                
                <div class="form-group">
                 <label for="blog_foto">Foto 2 (size:600x600)</label><br>
                 <img src="<?php echo base_url(); ?>img/home/<?php echo $data_home->photo_2; ?>" width="200" height="200"/><br><br><br><br>
                 <input type="hidden" name="gambar_old6" value="<?php echo $data_home->photo_2; ?>" />
                  <input type="file" name="photo_2" id="photo_2" />
                </div>
                
                <div class="col-md-3">
          <button type="submit" class="btn btn-dark add" >Save Changes</button>
        </div>
                
                
                <div class="form-group">
                 <label for="blog_foto">Foto 3 (size:600x600)</label><br>
                 <img src="<?php echo base_url(); ?>img/home/<?php echo $data_home->photo_3; ?>" width="200" height="200"/><br><br><br><br>
                 <input type="hidden" name="gambar_old7" value="<?php echo $data_home->photo_3; ?>" />
                  <input type="file" name="photo_3" id="photo_3" />
                </div>
                
                <div class="col-md-3">
          <button type="submit" class="btn btn-dark add" >Save Changes</button>
        </div>
                
                
                <div class="form-group">
                 <label for="blog_foto">Foto 4 (size:600x600)</label><br>
                 <img src="<?php echo base_url(); ?>img/home/<?php echo $data_home->photo_4; ?>" width="200" height="200"/><br><br><br><br>
                 <input type="hidden" name="gambar_old8" value="<?php echo $data_home->photo_4; ?>" />
                  <input type="file" name="photo_4" id="photo_4" />
                </div>
                
                <div class="col-md-3">
          <button type="submit" class="btn btn-dark add" >Save Changes</button>
        </div>
                
                
                <div class="form-group">
                 <label for="blog_foto">Foto 5 (size:600x600)</label><br>
                 <img src="<?php echo base_url(); ?>img/home/<?php echo $data_home->photo_5; ?>" width="200" height="200"/><br><br><br><br>
                 <input type="hidden" name="gambar_old9" value="<?php echo $data_home->photo_5; ?>" />
                  <input type="file" name="photo_5" id="photo_5" />
                </div>
                
                <div class="col-md-3">
          <button type="submit" class="btn btn-dark add" >Save Changes</button>
        </div>
                
                
                <div class="form-group">
                 <label for="blog_foto">Foto 6 (size:600x600)</label><br>
                 <img src="<?php echo base_url(); ?>img/home/<?php echo $data_home->photo_6; ?>" width="200" height="200"/><br><br><br><br>
                 <input type="hidden" name="gambar_old10" value="<?php echo $data_home->photo_6; ?>" />
                  <input type="file" name="photo_6" id="photo_6" />
                </div>
                
               
              
              <div class="col-md-3">
          <button type="submit" class="btn btn-dark add" >Save Changes</button>
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