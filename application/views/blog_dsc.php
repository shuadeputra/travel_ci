
 <br> 
  <header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto text-center">
          <h1>Read Our Blog</h1>
          <p>This is our Blog Traveli</p>
        </div>
      </div>
    </div>
  </header>

  <!-- BLOG SECTION -->
  <section id="blog" class="py-3">
      <div class="container">
       <?php foreach($getblogpage as $rows) { ?>
        <div class="card">
        <div class="media">
          <a href="<?= base_url() ?>blog_detail/<?= $rows['blog_id'] ?>"><img class="d-flex mr-3" style="width:8em" src="<?php echo base_url(); ?>img/blog/<?= $rows['blog_foto'] ?>"></a>
          <div class="media-body m-auto">
              <h5 class="mt-0"><?= substr($rows['blog_name'],0,20) ?></h5>
             <?= substr($rows['blog_dsc'],0,150) ?>
          <br><a href="<?= base_url() ?>blog_detail/<?= $rows['blog_id'] ?>">Read More</a>
          </div>
      </div>
          </div><br>

<?php } ?>
   
    </div>
    
    
    
    
    

    
    <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled ">
                  <div class="pagination">      
             <?php echo $this->pagination->create_links();?>
                </div>
              </ul>
            </nav>
    
    
</section>
   
         
    
 
  
  
