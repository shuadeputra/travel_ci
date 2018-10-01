    <?php if (isset($blog_data)) { ?>
                 
<!--    SEO -->

	<title><?php echo $blog_data->title_seo; ?></title>
	<meta name="description" content="<?php echo $blog_data->keyword_seo; ?>"/>
	<meta name="keywords" content="<?php echo $blog_data->description_seo; ?>"/>
  
  
  <?php } ?>

<!--End SEO-->
                 
                 
                 
                 
                 
                 
                 
                   <?php if (isset($blog_data)) { ?> 
                 
                 <input type="hidden" name="product_id" value="<?php echo $blog_data->blog_id; ?>" />
                <?php } ?>
  

  <br>
   <header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto text-center">
          <h1>Blog</h1>
          <p>This is Our Traveli blog.</p>
        </div>
      </div>
    </div>
  </header>
<br> 
 
   <!-- keterangan dari awal -->
   
     <div class="container">
        <div class="row">
        <div class="col-md-8">
          
           <?php if (isset($blog_data)) { ?>
            <div class="card">
               <div class="res-joe card pinksalem text-light" style="text-align: center; font-size:10px;">
            <h3><?php echo $blog_data->blog_name; ?></h3>
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
                    </div>
                </div>
                
-->
                    
                    
        <!-- SLIDER WITH CONTROLS -->
        <div id="slider2" class="carousel slide mb-5" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="<?php echo base_url(); ?>img/blog/<?php echo $blog_data->blog_foto; ?>" alt="First Slide">
            </div>
        </div>
        </div>
        
        
      <!-- tabel perjalanan -->
        <div class="table-perjalanan" style="padding:10px;">
                <h3 style="color:red;"><?php echo $blog_data->blog_name; ?></h3><hr>
                <p class="text-justify"> <?php echo $blog_data->blog_dsc; ?></p>
                    
        </div>
    </div>
      </div>
         
         <?php } ?>

         
         
         
          <!-- BLOG SECTION -->
        <div class="col-md-4">
        <div class="card pinksalem text-light">
         <h1 style="font-size: 20px; text-align: center;">Blog lain</h1>
         </div><br>
         <?php foreach($getbloglimit as $rows) { ?>
        <div class="card">
        <div class="media">
          <a href="#"><img class="d-flex mr-3" style="width:8em" src="<?php echo base_url(); ?>img/blog/<?= $rows['blog_foto'] ?>"></a>
          <div class="media-body m-auto">
              <h5 class="mt-0"><?= substr($rows['blog_name'],0,20) ?></h5>
              <?= substr($rows['blog_dsc'],0,40) ?><br>
          <a href="<?= base_url() ?>blog_detail/<?= $rows['blog_id'] ?>">Read More</a>
          </div>
      </div>
          </div><br>
        <?php } ?>
    
    </div>
      </div>
          </div>
            
            
             <!-- BLOG SECTION -->
    <div class="container">
            <div class="table-perjalanan" style="padding:10px;">
            <h1 style="color:red;">Recommended for you</h1><hr>            
        </div>
    </div>
  <section id="blog" class="py-3">
    <div class="container">
      <div class="row">
       <?php foreach($getproducts as $rows) { ?>
        <div class="col-md-2">
            <div class="card">
              <img src="<?php echo base_url(); ?>img/product/<?= $rows['product_gambar'] ?>" alt="" class="card-img-top img-fluid">
              <div class="card-body">
                <h6><?= substr($rows['product_name'],0,10) ?></h6>
                <small class="text-muted"><?= substr($rows['date'],0,50) ?></small>
                <a href="<?= base_url() ?>products/productDetail/<?= $rows['product_id'] ?>" class="btn pinksalem text-light btn-block">Read More</a>
              </div>
            </div>
          </div>
        <?php } ?>

          </div>


          </div>
  </section>