<?= $this->extend('dashboard/v_template_admin.php'); ?>
<?= $this->section('content_dashboard'); ?>

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="/addmenu">
                    <button type="button" class="btn btn-block btn-primary btn-lg">Add Menu</button>
                </a>
              
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
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <?php foreach ($menu as $m) : ?>
                    <td><?= $m['menu']; ?></td>
                    <td><?= $m['jenis_menu']; ?></td>
                    <td><?= $m['keterangan']; ?></td>
                    <td>Rp <?= $m['harga']; ?></td>
                    <td></td>
                    <td><?= $m['updated_at']; ?></td>
                    <?php endforeach; ?>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Menu</th>
                    <th>Jenis Menu</th>
                    <th>Keterangan</th>
                    <th>Harga</th>
                    <th>Image</th>
                    <th>Last Update</th>
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