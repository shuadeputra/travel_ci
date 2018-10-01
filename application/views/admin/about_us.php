 <header id="main-header" class="py-2 bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-folder"></i> About us</h1>
        </div>
      </div>
    </div>
  </header>
  
  
   
    <!-----Button---->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
         <?php foreach($getabout as $row) { ?>
          <a href="<?php echo base_url(); ?>about_us/editabout/<?php echo $row["id_aboutus"]; ?>" class="btn btn-dark">
            <i class="fa fa-plus"></i> Edit About us
          </a>
          <?php } ?>
        </div>
        </div>
      </div>
    </section>
    
    
  
  
  

  <!-- CATEGORIES -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>About us</h4>
            </div>
            <table class="table table-responsive" id="myTable">
              <thead class="thead-inverse">
                <tr>
                  <th>Judul Besar</th>
                  <th>Isi besar</th>
                  <th>Judul k1</th>
                  <th>Isi k1</th>
                  <th>Judul k2</th>
                  <th>Isi k2</th>
                  <th>Judul k3</th>
                  <th>Isi k3</th>
                  <th>Judul k4</th>
                  <th>Isi k4</th>
                  <th>Judul k5</th>
                  <th>Isi k5</th>
                  <th>Date Posted</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($getabout as $row) { ?>
                <tr>
                  <td><?php echo $row['judul_besar'] ?></td>
                  <td><?php echo $row['isi_besar'] ?></td>
                  <td><?php echo $row['judul_k1'] ?></td>
                  <td><?php echo $row['isi_k1'] ?></td>
                  <td><?php echo $row['judul_k2'] ?></td>
                  <td><?php echo $row['isi_k2'] ?></td>
                  <td><?php echo $row['judul_k3'] ?></td>
                  <td><?php echo $row['isi_k3'] ?></td>
                  <td><?php echo $row['judul_k4'] ?></td>
                  <td><?php echo $row['isi_k4'] ?></td>
                  <td><?php echo $row['judul_k5'] ?></td>
                  <td><?php echo $row['isi_k5'] ?></td>
                  <td><?php echo $row['date'] ?></td>
                </tr>
                <?php } ?> 
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </section>
