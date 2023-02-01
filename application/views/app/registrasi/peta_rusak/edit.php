<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Peta Rusak</h1>
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
              <form action="#!" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="kode_peta_rusak">Kode Peta Rusak</label>
                  <input type="text" class="form-control" id="kode_peta_rusak" name="kode_peta_rusak" value="<?= $peta_rusak['kode_peta_rusak'] ?>" readonly>
                </div>
  
                <div class="form-group">
                  <label for="tanggal">Tanggal</label>
                  <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $peta_rusak['tanggal'] ?>">
                </div>
  
                <div class="form-group">
                  <label for="kode_peta">Pilih Peta</label>
                  <select name="kode_peta" id="kode_peta" class="form-control">
                    <option value="baru">Baru</option>
                    <option value="lama">Lama</option>
                  </select>
                </div>
  
                <div class="form-group">
                  <label for="jumlah">Jumlah</label>
                  <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $peta_rusak['jumlah'] ?>">
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