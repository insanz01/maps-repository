<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Buku Masuk</h1>
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
              <form action="<?= base_url("register_buku/do_edit/") . $buku_masuk["id"] ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="kode_buku_masuk">Kode Buku Masuk</label>
                  <input type="text" class="form-control" id="kode_buku_masuk" name="kode_buku_masuk" value="<?= $buku_masuk["kode_buku_masuk"] ?>" readonly>
                </div>
  
                <div class="form-group">
                  <label for="tanggal">Tanggal</label>
                  <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $buku_masuk['tanggal'] ?>">
                </div>
  
                <div class="form-group">
                  <label for="kode_peta">Pilih Buku</label>
                  <select name="kode_buku" id="kode_buku" class="form-control">
                    <?php foreach($buku as $data): ?>
                      <option value="<?= $data['id'] ?>" <?= ($data['id'] == $buku_masuk['kode_buku']) ? "selected": "" ?>>
                        <?= $data['nama_buku'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                </div>
  
                <div class="form-group">
                  <label for="jumlah">Jumlah</label>
                  <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $buku_masuk['jumlah'] ?>">
                </div>

                <div class="form-group">
                  <label for="penanggung_jawab">Penanggung Jawab</label>
                  <select name="penanggung_jawab" id="penanggung_jawab" class="form-control">
                    <?php foreach($pegawai as $data): ?>
                      <option value="<?= $data['id'] ?>" <?= ($data['id'] == $buku_masuk['penanggung_jawab']) ? "selected": "" ?>>
                        <?= $data['nama_pegawai'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block btn-lg">SIMPAN PERUBAHAN DATA</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>