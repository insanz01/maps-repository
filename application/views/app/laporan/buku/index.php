<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Laporan Buku</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <!-- <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active"></li>
          </ol> -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <table class="table table-print">
            <thead>
              <th>#</th>
              <th>Kode</th>
              <th>Nama Buku</th>
              <th>Kategori</th>
              <th>Lemari</th>
            </thead>
            <tbody>
              <?php $number = 1 ?>
              <?php foreach($laporan as $data): ?>
              <tr>
                <td><?= $number++ ?></td>
                <td><?= $data['kode_buku'] ?></td>
                <td><?= $data['nama_buku'] ?></td>
                <td><?= $data['kategori_buku'] ?></td>
                <td><?= $data['lemari_buku'] ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>