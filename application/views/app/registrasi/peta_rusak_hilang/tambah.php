<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Peta Rusak & Hilang</h1>
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
              <form action="<?= base_url("register_peta_rusak_hilang/do_add") ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="kode_peta_rusak_hilang">Kode Peta Rusak & Hilang</label>
                  <input type="text" class="form-control" id="kode_peta_rusak_hilang" name="kode_peta_rusak_hilang" value="<?= $peta_rusak_hilang['kode_peta_rusak_hilang'] ?>" readonly>
                </div>
  
                <div class="form-group">
                  <label for="tanggal">Tanggal</label>
                  <input type="date" class="form-control" id="tanggal" name="tanggal">
                </div>
  
                <div class="form-group">
                  <label for="kode_peta">Pilih Peta</label>
                  <select name="kode_peta" id="kode_peta" class="form-control">
                    <?php foreach($peta as $data): ?>
                      <option value="<?= $data['id'] ?>">
                        <?= $data['nama_peta'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                </div>
  
                <div class="form-group">
                  <label for="jumlah">Jumlah</label>
                  <input type="number" class="form-control" id="jumlah" name="jumlah">
                </div>

                <div class="form-group">
                  <label for="status">Status Peta</label>
                  <select name="status" id="status" class="form-control">
                    <?php foreach($status as $data): ?>
                      <option value="<?= $data['id'] ?>">
                        <?= $data['nama_status'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="jumlah">Keterangan</label>
                  <input type="text" class="form-control" id="keterangan" name="keterangan">
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