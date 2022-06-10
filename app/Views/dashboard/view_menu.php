<?= $this->extend('dashboard/v_template_admin.php'); ?>
<?= $this->section('content_dashboard'); ?>

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
      <?php if(!empty(session()->getFlashdata('gagal'))){ ?>
                    <div class="alert alert-danger">
                        <?php echo session()->getFlashdata('gagal');?>
                    </div>
                  <?php } ?>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div style="width: 150px;">
                  <a href="/addmenu">
                      <button type="button" class="btn btn-block btn-primary btn-lg">Add Menu</button>
                  </a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Menu</th>
                    <th>Jenis Menu</th>
                    <th>Keterangan</th>
                    <th>Harga</th>
                    <th>Image</th>
                    <th>Last Update</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($menu as $m) : ?>
                  <tr style="font-weight:400;">
                    <td><?= $m['menu']; ?></td>
                    <td><?= $m['jenis_menu']; ?></td>
                    <td><?= $m['keterangan']; ?></td>
                    <td>Rp<?= $m['harga']; ?></td>
                    <td><img src="/img/<?= $m['img']; ?>" width="100px" alt=""></td>
                    <td><?= $m['updated_at']; ?></td>
                    <td>
                      <a href="/editmenu">
                        <button type="button" class="btn btn-block btn-primary"> Edit </button>
                      </a>
                      <a href="/C_Dashboard/delete/<?= $m['id']; ?>">
                        <button type="button" class="btn btn-block btn-danger"> Hapus </button>
                      </a>
                    </td>
                  </tr><?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Menu</th>
                    <th>Jenis Menu</th>
                    <th>Keterangan</th>
                    <th>Harga</th>
                    <th>Image</th>
                    <th>Last Update</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
<?= $this->endSection(); ?>