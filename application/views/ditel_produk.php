    <?php if (isset($product_data)) { ?>
                 
                 <input type="hidden" name="product_id" value="<?php echo $product_data->product_id; ?>" />
    <?php } ?>
  
  
<br>
  <header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto text-center">
          <h1>Services</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, saepe.</p>
        </div>
      </div>
    </div>
  </header>
<br> 
 
   <!-- keterangan dari awal -->
  <div class="container">
        <div class="row">
        <div class="col-md-8">
          
           <?php if (isset($product_data)) { ?>
            <div class="card">
               <div class="res-joe card pinksalem text-light" style="text-align: center; font-size:50px;">
            <h1><?php echo $product_data->product_name; ?></h1>
            </div>
               

<!--
                    <div class="social-icon pull-right">
                        <div class="social-icon">

                            

    <a href="https://tripal.co/journey/1512830452"><span class="soc-icon2" style="color: red;"><i class="fa fa-link"></i></span></a>

    <a href="#"><span class="soc-icon2 instagram"><i class="fa fa-instagram"></i></span></a>

    <a href="http://twitter.com/share?source=sharethiscom&text=Tripal.co&url=https://tripal.co/journey/1512830452&via=tripal"><span class="soc-icon2 twitter"><i class="fa fa-twitter"></i></span></a>
                            
    <a href="javascript:void(0);" onclick="popUp=window.open('https://plus.google.com/share?url=https://tripal.co/journey/1512830452 ','popupwindow','scrollbars=yes,width=800,height=400');popUp.focus();return false"><span class="soc-icon2 gplus"><i class="fa fa-google-plus"></i></span></a>

    <a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=Tripal.co&amp;p[summary]=Tripal adalah market place yang menghubungkan pelancong (Traveler) dengan orang lokal (Pal) yang bersedia menjadi “Sahabat Perjalanan Anda”.Dengan kata lain, Tripal adalah marketplace yang mempertemukan traveler dengan orang lokal.&amp;p[url]=https://tripal.co/journey/1512830452&amp;&p[images][0]=/themes/images/logo-long.png', 'sharer', 'toolbar=0,status=0,width=550,height=400');" target="_parent" href="javascript: void(0)"><span class="soc-icon2 fb"><i class="fa fa-facebook"></i></span></a>

    <a href="https://tripal.co/journey/1512830452"><span class="soc-icon2" style="color: red;"><i class="fa fa-share-alt"></i></span></a>

    <a href="/site/like/1512830452?type=journey&ref=journey%2F1512830452&token=9498b84d1a79dec5c6aa90a16b45b044"><span class="soc-icon2" style="color: red;"><i class="fa fa-thumbs-up"></i></span></a>
   
                        </div>
                    </div>
-->
                
            
                
                    
                    
        <!-- SLIDER WITH CONTROLS -->
        <div id="slider2" class="carousel slide mb-5" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="<?php echo base_url(); ?>img/product/<?php echo $product_data->product_gambar; ?>" alt="First Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?php echo base_url(); ?>img/product/<?php echo $product_data->product_gambar2; ?>" alt="Second Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?php echo base_url(); ?>img/product/<?php echo $product_data->product_gambar3; ?>" alt="Third Slide">
            </div>
          </div>
          <a href="#slider2" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>

          <a href="#slider2" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
        
        
      <!-- tabel perjalanan -->
        <div class="table-perjalanan" style="padding:10px;">
                <h1 style="color:red;">Detail Perjalanan <?php echo $product_data->product_kategori; ?></h1>
              <table>

                <tbody>
<!--
                  <tr>
                    <td>Tipe Perjalanan</td>
                    <td>
                    <i class='fa fa-check'></i> Liburan Santai<br>                    
                    </td>
                  </tr>
                  <hr>
                  <tr>
                    <td>Rencana Perjalanan Yang di Kunjungi</td>
                    <td>
                        <i class="fa fa-check"></i> H 01 : Tiba - Hotel ( Makan Malam )  <br>
                        <i class="fa fa-check"></i> H 02 : Gili Trawangan Tour ( Sarapan, Makan siang dan malam ) <br>
                        <i class="fa fa-check"></i> H 03 : Sasak Tradisional Tour / Kuta Tour ( Sarapan, makan siang dan malam ) <br>
                        <i class="fa fa-check"></i> H 04 : Wisata belanja - Bandara Lombok ( Sarapan , makan siang ) <br>
                        </td>
                  </tr>
                  <tr>
                    <td>Transportasi Selama Perjalanan</td>
                    <td><i class="fa fa-check"></i> Mobil</td>
                  </tr>
                  <tr>
                    <td>Durasi</td>
                    <td><i class="fa fa-check"></i> 4 Hari</td>
                  </tr>
                  <tr>
                    <td>Jumlah Orang</td>
                    <td><i class="fa fa-check"></i> 2 Orang</td>
                  </tr>
                  <tr>
                    <td>Tempat Bertemu</td>
                    <td><i class="fa fa-check"></i> Bertemu dilokasi Umum</td>
                  </tr>
                  <tr>
                    <td>Penjemputan</td>
                    <td><i class="fa fa-check"></i> yes(free of cherge)</td>
                  </tr>
                  <tr>
                    <td>Konfirmasi</td>
                    <td><i class="fa fa-check"></i> instant confirmation</td>
                  </tr>
                  <tr>
                    <td>Termasuk</td>
                    <td>
                        <i class="fa fa-check"></i> Asuransi Perjalanan <br>
                        <i class="fa fa-check"></i> Karcis masuk tempat wisata <br>
                        <i class="fa fa-check"></i> Makanan <br>
                        <i class="fa fa-check"></i> Minuman <br>
                        <i class="fa fa-check"></i> Penjemputan dan Pengantaran <br>
                        <i class="fa fa-check"></i> Perlengkapan aktivitas <br>
                        <i class="fa fa-check"></i> Sahabat lokal <br>
                        <i class="fa fa-check"></i> Supir pribadi <br>
                        <i class="fa fa-check"></i> Transportasi selama perjalanan <br>
                        </td>
                  </tr>
                  <tr>
                    <td>Tidak Termasuk</td>
                    <td>
                        <i class="fa fa-times"></i> Makan Sesuai Keinginan <br>
                    </td>
                  </tr>
                  <tr>
                    <td>Diperbolehkan</td>
                    <td>
                        <i class="fa fa-check"></i> Membawa Makanan Sendiri <br>
                        <i class="fa fa-check"></i> Membawa Perlengkapan Pribadi <br>
                    </td>
                  </tr>
                  <tr>
                    <td>Tidak Diperbolehkan</td>
                    <td>
                        <i class="fa fa-check"></i> Membawa Makanan Sendiri <br>
                        <i class="fa fa-check"></i> Membawa Perlengkapan Pribadi <br>
                    </td>
                  </tr>

                  <tr>
                    <td>Keterangan Lain</td>
                    <td>
                        <i class="fa fa-check"></i> Membawa Makanan Sendiri <br>
                        <i class="fa fa-check"></i> Membawa Perlengkapan Pribadi <br>
                    </td>
                  </tr>
-->
                <?php echo $product_data->product_dsc; ?>
                </tbody>
              </table>  
              <br>
              <button class="btn pinksalem btn-block text-light" data-toggle="modal" data-target="#myModal">Buy Tickets</button>      
            </div>
        </div>
    </div>
            
  
  
  <!-- kontak agent -->
        <div class="col-md-4">
        <div class="card">
          <div class="card-header pinksalem text-light">Contact Agent</div>
            <img class="card-img-top"; src="<?php echo base_url(); ?>img/product/<?php echo $product_data->agent_pic; ?>" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title"><?php echo $product_data->agent_name; ?></h4>
            
            <ul>
            <li class="fa fa-phone fa-lg" aria-hidden="true"></li> <?php echo $product_data->agent_number; ?> <br><br>
            <li class="fa fa fa-envelope fa-lg" aria-hidden="true"></li> <?php echo $product_data->agent_email; ?> <br><br>
            <li class="fa fa-map-marker fa-lg" aria-hidden="true"></li> <?php echo $product_data->agent_place; ?>
            </ul>
            
            <p class="card-text"> <?php echo $product_data->agent_dsc; ?></p>
          </div>
          </div>
          
          <br>
          
          <!-- Video -->
           <iframe class="card-img-top" width="347" height="315" src="<?php echo $product_data->video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        
          </div>
        </div>
    </div>
<br>


  
  
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header text-md-center pinksalem">
          <h4 class="text-light"><span class="fa fa-ticket fa-5x"></span>  Tickets</h4>
        </div>
        <div class="modal-body">
           <form action="<?php echo base_url(); ?>service/addtiket" method="post" enctype="multipart/form-data">
           
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Rp. <?php echo $product_data->product_price; ?></label>
              
              <input type="hidden" name="nama_paket" value="<?php echo $product_data->product_name; ?>" />
              
              <input name="jumlah" type="number" class="form-control" id="psw" placeholder="How many?" required>
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Name </label>
              <input name="nama" type="text" class="form-control" id="usrname" placeholder="Enter Name" required>
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input name="email" type="email" class="form-control" id="usrname" placeholder="Enter email" required>
            </div>
             <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Phone Number</label>
              <input name="nomor_tlp" type="number" class="form-control" id="usrname" placeholder="Enter number" required>
            </div>
             
              <button type="submit" class="btn btn-block pinksalem">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
  
    <?php } ?>
  
  

