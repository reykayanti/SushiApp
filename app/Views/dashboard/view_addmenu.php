<?= $this->extend('dashboard/v_template_admin.php'); ?>
<?= $this->section('content_dashboard'); ?>

<!-- Main content -->
<!-- Main content -->
<section class="content">
<?php if(!empty(session()->getFlashdata('gagal'))){ ?>
                    <div class="alert alert-danger">
                        <?php echo session()->getFlashdata('gagal');?>
                    </div>
                  <?php } ?>
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/C_Dashboard/save" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="menu">Menu</label>
                    <input type="text" name="menu" class="form-control" id="menu">
                  </div>
                  <div class="form-group">
                    <label>Jenis Menu</label>
                    <select class="form-control" name="jenis_menu">
                      <option value="sushi">Sushi</option>
                      <option value="drink">Drink</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="keterangan">Keterangan Menu</label>
                    <input type="text" name="keterangan" class="form-control" id="keterangan">
                  </div>
                  
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" class="form-control" id="harga">
                  </div>
                  <div class="form-group">
                    <label for="img">Foto Menu</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="img" name="img">
                        <label class="custom-file-label" name="img" for="img">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer" style="display: flex;">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <div style="width: 70px;">
                  <a href="/admin">
                      <button type="button" class="btn btn-block btn-danger"> Batal </button>
                  </a>
                </div>
                </div>
                <!-- /.card-body -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


<?= $this->endSection(); ?>