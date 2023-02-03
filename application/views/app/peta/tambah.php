<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Peta</h1>
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
              <form action="<?= base_url('peta/do_add') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="kode_peta">Kode Peta</label>
                  <input type="text" class="form-control" id="kode_peta" name="kode_peta" value="<?= $peta['kode_peta'] ?>" readonly>
                </div>
  
                <div class="form-group">
                  <label for="nama_peta">Nama Peta</label>
                  <input type="text" class="form-control" id="nama_peta" name="nama_peta">
                </div>
  
                <div class="form-group">
                  <label for="kode_kategori_peta">Pilih Kategori Peta</label>
                  <select name="kode_kategori_peta" id="kode_kategori_peta" class="form-control">
                    <?php foreach($kategori_peta as $data): ?>
                      <option value="<?= $data['id'] ?>"><?= $data['nama_kategori'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
  
                <div class="form-group">
                  <label for="kode_lemari_peta">Pilih Lemari Arsip</label>
                  <select name="kode_lemari_peta" id="kode_lemari_peta" class="form-control">
                    <?php foreach($lemari as $data): ?>
                      <option value="<?= $data['id'] ?>"><?= $data['nama_lemari'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
  
                <div class="form-group">
                  <label for="file_peta">File Peta</label>
                  <input type="file" class="form-control" id="file_peta" name="file_peta">
                </div>

                <div class="form-group">
                  <label for="link_peta">Link Peta</label>
                  <input type="text" class="form-control" id="link_peta" name="link_peta">
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