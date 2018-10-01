 
   <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1> Post One</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mr-auto">
          <a href="<?php echo base_url(); ?>posts" class="btn btn-light btn-block">
            <i class="fa fa-arrow-left"></i> Back To Posts
          </a>
        </div>
      </div>
    </div>
  </section>
  
  <?php if (isset($data_product)) { ?>

  <!-- POSTS -->
  
  <section id="posts">
    <div class="container">
      <div class="row">
       <div class="col-md-8 mr-auto">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Edit Post</h4>
            </div>
            <div class="card-body">
              <form action="<?php echo base_url(); ?>posts/editProductSubmit" method="post" enctype="multipart/form-data">
               
               <input type="hidden" name="product_id" value="<?php echo $data_product->product_id; ?>" />
               
                <div class="form-group">
                  <label for="title">Nama Product</label>
                  <input id="product_name" name="product_name" type="text" class="form-control" value="<?php echo $data_product->product_name; ?>">
                </div>
                <div class="form-group">
                  <label for="title">Harga</label>
                  <input id="product_price" name="product_price" type="number" class="form-control" value="<?php echo $data_product->product_price; ?>">
                </div>
                <div class="form-group">
                  <label for="title">Kategori</label>
                  <input id="product_kategori" name="product_kategori" type="price" class="form-control" value="<?php echo $data_product->product_kategori; ?>">
                </div>
                
                <div class="form-group">
                  <label for="title">Video</label>
                  <input id="video" name="video" type="text" class="form-control" value="<?php echo $data_product->video; ?>">
                </div>
                
                <!--Gambar-->
<!--
                <div class="form-group">
                
                 <label for="product_gambar">Attachments</label><br>
                 
                 <img src="<?php echo base_url(); ?>img/product/<?php echo $data_product->product_gambar; ?>" width="200" height="200"/><br><br><br><br><br>
                 <input type="hidden" name="gambar_old" value="<?php echo $data_product->product_gambar; ?>" />
                 
                  <input type="file" name="product_gambar" id="product_gambar" />
                       
                </div>
-->
                
                <!--Gambar 2-->
<!--
                <div class="form-group">
                
                 <label for="product_gambar">Attachments</label><br>
                 
                 <img src="<?php echo base_url(); ?>img/product/<?php echo $data_product->product_gambar2; ?>" width="200" height="200"/><br><br><br><br><br>
                 <input type="hidden" name="gambar_old2" value="<?php echo $data_product->product_gambar2; ?>" />
                 
                  <input type="file" name="product_gambar2" id="product_gambar2" />
                       
                </div>
-->
                
                
                <!--Gambar 3-->
<!--
                <div class="form-group">
                
                 <label for="product_gambar">Attachments</label><br>
                 
                 <img src="<?php echo base_url(); ?>img/product/<?php echo $data_product->product_gambar3; ?>" width="200" height="200"/><br><br><br><br><br>
                 <input type="hidden" name="gambar_old3" value="<?php echo $data_product->product_gambar3; ?>" />
                 
                  <input type="file" name="product_gambar3" id="product_gambar3" />
                       
                </div>
-->
                
                <div class="form-group">
                  <label for="body">Deskripsi</label>
                  <textarea name="product_dsc" id="editor1" class="form-control"><?php echo $data_product->product_dsc; ?></textarea>
                </div>
                
                        <!--Agent form-->
            <div class="form-group">
                  <label for="title">Agent Name</label>
                  <input id="agent_name" name="agent_name" type="text" class="form-control" value="<?php echo $data_product->agent_name; ?>">
                </div>            
                        
            <div class="form-group">
                  <label for="title">Agent Number</label>
                  <input id="agent_number" name="agent_number" type="number" class="form-control" value="<?php echo $data_product->agent_number; ?>">
                </div>
                
            <div class="form-group">
                  <label for="title">Agent Email</label>
                  <input id="agent_email" name="agent_email" type="email" class="form-control" value="<?php echo $data_product->agent_email; ?>">
                </div>
                
            <div class="form-group">
                  <label for="title">Agent Place</label>
                  <input id="agent_place" name="agent_place" type="text" class="form-control" value="<?php echo $data_product->agent_place; ?>">
                </div>
                
            <div class="form-group">
                  <label for="title">Agent dsc</label>
                  <input id="agent_dsc" name="agent_dsc" type="text" class="form-control" value="<?php echo $data_product->agent_dsc; ?>">
                </div>
            
            
<!--
               <div class="form-group">
                
                 <label for="agent_pic">Attachments</label><br>
                 
                 <img src="<?php echo base_url(); ?>img/product/<?php echo $data_product->agent_pic; ?>" width="200" height="200"/><br><br><br><br><br>
                 <input type="hidden" name="gambar_old4" value="<?php echo $data_product->agent_pic; ?>" />
                 
                  <input type="file" name="agent_pic" id="agent_pic" />
                       
                </div>
-->
              
              <div class="col-md-3">
              <button type="submit" class="btn btn-primary add" >Save Changes</button>
        </div>
           </form>
            </div>
          </div>
        </div>
      </div>
       <?php } ?>
       
       <!--lembaran baru-->

  <?php if (isset($data_product)) { ?>
    <div class="col-md-4 mr-auto">
          
          <div class="col">
          <div class="card">
            <div class="card-header bg-dark text-light" style="text-align:center">
              <h4>Edit Foto</h4>
            </div>
            <div class="card-body">
              <form action="<?php echo base_url(); ?>posts/editProductfoto" method="post" enctype="multipart/form-data">
               
               <input type="hidden" name="product_id" value="<?php echo $data_product->product_id; ?>" />
               
                <!--Gambar-->
                <div class="form-group">
                
                 <label for="product_gambar">Gambar produk 1</label><br>
                 
                 <img src="<?php echo base_url(); ?>img/product/<?php echo $data_product->product_gambar; ?>" width="200" height="200"/><br><br><br>
                 <input type="hidden" name="gambar_old" value="<?php echo $data_product->product_gambar; ?>" />
                 
                  <input type="file" name="product_gambar" id="product_gambar" />
                       
                </div>
                
                <div class="col-md-3">
          <button type="submit" class="btn btn-primary add" >Save Changes</button>
        </div>
                
                <!--Gambar 2-->
                <div class="form-group">
                
                 <label for="product_gambar">Gambar produk 2</label><br>
                 
                 <img src="<?php echo base_url(); ?>img/product/<?php echo $data_product->product_gambar2; ?>" width="200" height="200"/><br><br><br>
                 <input type="hidden" name="gambar_old2" value="<?php echo $data_product->product_gambar2; ?>" />
                 
                  <input type="file" name="product_gambar2" id="product_gambar2" />
                       
                </div>
                
                <div class="col-md-3">
          <button type="submit" class="btn btn-primary add" >Save Changes</button>
        </div>
                
                
                <!--Gambar 3-->
                <div class="form-group">
                
                 <label for="product_gambar">Gambar produk 3</label><br>
                 
                 <img src="<?php echo base_url(); ?>img/product/<?php echo $data_product->product_gambar3; ?>" width="200" height="200"/><br><br><br>
                 <input type="hidden" name="gambar_old3" value="<?php echo $data_product->product_gambar3; ?>" />
                 
                  <input type="file" name="product_gambar3" id="product_gambar3" />
                       
                </div>
                
            
            <div class="col-md-3">
          <button type="submit" class="btn btn-primary add" >Save Changes</button>
        </div>
            
            <!-- Foto Agent   -->
               <div class="form-group">
                
                 <label for="agent_pic">Foto Agent</label><br>
                 
                 <img src="<?php echo base_url(); ?>img/product/<?php echo $data_product->agent_pic; ?>" width="200" height="200"/><br><br><br>
                 <input type="hidden" name="gambar_old4" value="<?php echo $data_product->agent_pic; ?>" />
                 
                  <input type="file" name="agent_pic" id="agent_pic" />
                       
                </div>
              
              <div class="col-md-3">
              <button type="submit" class="btn btn-primary add" >Save Changes</button>
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


