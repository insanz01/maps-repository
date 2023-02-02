<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Buku</h1>
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
              <form action="<?= base_url("buku/do_add") ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="kode_buku">Kode Buku</label>
                  <input type="text" class="form-control" id="kode_buku" name="kode_buku" value="<?= $buku['kode_buku'] ?>" readonly>
                </div>
  
                <div class="form-group">
                  <label for="nama_buku">Nama Buku</label>
                  <input type="text" class="form-control" id="nama_buku" name="nama_buku">
                </div>
  
                <div class="form-group">
                  <label for="kode_kategori_buku">Pilih Kategori Buku</label>
                  <select name="kode_kategori_buku" id="kode_kategori_buku" class="form-control">
                    <?php foreach($kategori_buku as $data): ?>
                      <option value="<?= $data['id'] ?>"><?= $data['nama_kategori'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
  
                <div class="form-group">
                  <label for="kode_lemari_buku">Pilih Lemari Arsip</label>
                  <select name="kode_lemari_buku" id="kode_lemari_buku" class="form-control">
                    <?php foreach($lemari as $data): ?>
                      <option value="<?= $data['id'] ?>"><?= $data['nama_lemari'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
  
                <div class="form-group">
                  <label for="file_buku">File Buku</label>
                  <input type="file" class="form-control" id="file_buku" name="file_buku">
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