<?= $this->extend('dashboard/v_template_admin.php'); ?>
<?= $this->section('content_dashboard'); ?>

<!-- Main content -->

<section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Menu SushiStreet</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="menu">Nama Menu</label>
                            <input
                            class="form-control"
                            id="menu"
                            />
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input
                            class="form-control"
                            id="keterangan"
                            />
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input
                            class="form-control"
                            id="harga"
                            />
                        </div>
                        
                      
                      <div class="form-group">
                        <label for="exampleInputFile">Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input
                              type="file"
                              class="custom-file-input"
                              id="exampleInputFile"
                            />
                            <label
                              class="custom-file-label"
                              for="exampleInputFile"
                              >Choose file</label
                            >
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">
                        Submit
                      </button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->              
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->

        <?= $this->endSection(); ?>