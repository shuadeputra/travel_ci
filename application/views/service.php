<br>
   <header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto text-center">
          <h1>Services</h1>
          <p> Our Traveli Services Product.</p>
        </div>
      </div>
    </div>
  </header>

  <!-- SERVICES SECTION -->

  <section id="services" class="py-5">
    <div class="container">
      <div class="row">
        <?php foreach($getprodukpage as $rows) { ?>
        <div class="col-md-3">
        <div class="card" style="margin-top:10px">
            <img class="card-img-top" src="<?php echo base_url(); ?>img/product/<?= $rows['product_gambar'] ?>" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"><?= substr($rows['product_name'],0,10) ?></h4>
                <p class="card-text"><?= substr($rows['product_dsc'],0,50) ?></p>
                 <a href="<?= base_url() ?>products/productDetail/<?= $rows['product_id'] ?>" class="btn pinksalem btn-block text-light">Read More</a>
                    </div>
                  </div>
              </div>
              <?php } ?>
      </div>
      </div>
    </section>

    
        
   <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled ">
                  <div class="pagination">      
             <?php echo $this->pagination->create_links();?>
               
                </div>
              </ul>
            </nav>
       
  
  
  

  <!-- FAQ -->
<!--
  <section id="faq" class="p-5 bg-dark text-white">
    <div class="container">
      <h1 class="text-center">Frequently Asked Questions</h1>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    Question One?
                  </a>
                </h5>
              </div>

              <div id="collapseOne" class="collapse">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta dolorem, eligendi, provident quibusdam tempora! Commodi excepturi labore sunt, cupiditate quas adipisci magni dolorem, numquam saepe aut est qui asperiores!
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    Question Two?
                  </a>
                </h5>
              </div>

              <div id="collapseOne" class="collapse">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta dolorem, eligendi, provident quibusdam tempora! Commodi excepturi labore sunt, cupiditate quas adipisci magni dolorem, numquam saepe aut est qui asperiores!
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    Question Three?
                  </a>
                </h5>
              </div>

              <div id="collapseOne" class="collapse">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta dolorem, eligendi, provident quibusdam tempora! Commodi excepturi labore sunt, cupiditate quas adipisci magni dolorem, numquam saepe aut est qui asperiores!
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                    Question Four?
                  </a>
                </h5>
              </div>

              <div id="collapseFour" class="collapse">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta dolorem, eligendi, provident quibusdam tempora! Commodi excepturi labore sunt, cupiditate quas adipisci magni dolorem, numquam saepe aut est qui asperiores!
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                    Question Five?
                  </a>
                </h5>
              </div>

              <div id="collapseFive" class="collapse">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta dolorem, eligendi, provident quibusdam tempora! Commodi excepturi labore sunt, cupiditate quas adipisci magni dolorem, numquam saepe aut est qui asperiores!
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                    Question Six?
                  </a>
                </h5>
              </div>

              <div id="collapseSix" class="collapse">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta dolorem, eligendi, provident quibusdam tempora! Commodi excepturi labore sunt, cupiditate quas adipisci magni dolorem, numquam saepe aut est qui asperiores!
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->
