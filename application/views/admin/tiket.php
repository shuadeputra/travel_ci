 <header id="main-header" class="py-2 bg-light text-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-tags"></i> Tiket</h1>
        </div>
      </div>
    </div>
  </header>

  
     
  <!-- USERS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Latest Subscribe</h4>
            </div>
            <table class="table table-striped" id="myTable">
              <thead class="thead-inverse">
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Tlp</th>
                  <th>Email</th>
                  <th>Nama Paket</th>
                  <th>Jumlah</th>
                  <th>Tanggal</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
            <?php $no=1; ?>
                <?php foreach($gettiket as $row) { ?>
                <tr>
                  <td scope="row"><?php echo $no; ?> </td>
                  <td><?php echo $row['nama'] ?></td>
                  <td><?php echo $row['nomor_tlp'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td><?php echo $row['nama_paket'] ?></td>
                  <td><?php echo $row['jumlah'] ?></td>
                  <td><?php echo $row['tanggal'] ?></td>
                  <td>
                  
                   <a onClick="javascript: return confirm('Are you sure ti delete this data ?');" href="<?php echo base_url(); ?>tiket/deletetiket/<?php echo $row["tiket_id"]; ?>" class="btn btn-danger" title="Delete">
                    <i class="fa fa-trash"></i> Deleted
                  </a>
                  
                  </td>
                </tr>
                
            <?php $no++; ?>
                <?php } ?>   
                
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </section>