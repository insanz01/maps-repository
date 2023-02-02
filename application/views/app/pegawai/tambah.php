<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Pegawai</h1>
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
        <div class="col-7">
          <div class="card">
            <div class="card-body">
              <form action="<?= base_url('pegawai/do_add') ?>" method="post" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="kode_pegawai">Kode Pegawai</label>
                  <input type="text" class="form-control" id="kode_pegawai" name="kode_pegawai" value="<?= $pegawai['kode_pegawai'] ?>" readonly>
                </div>

                <div class="form-group">
                  <label for="nama_pegawai">Nama Pegawai</label>
                  <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai">
                </div>

                <div class="form-group">
                  <label for="jabatan">Jabatan</label>
                  <input type="text" class="form-control" id="jabatan" name="jabatan">
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block btn-lg">SIMPAN DATA</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>