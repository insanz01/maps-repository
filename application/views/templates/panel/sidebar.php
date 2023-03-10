<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url('profile') ?>" class="brand-link">
    <img src="<?= base_url() ?>assets/bahan/sipetruk_Transparent.png" alt="Panel Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Panel Console</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url() ?>assets/image/profile/user.png" class="objectPicture" alt="User Image">
      </div>
      <div class="info">
        <a href="<?= base_url() ?>" class="d-block"><?= 'Administrator' ?> </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <!-- tambah class menu-open untuk secara otomatis membuka -->
        <li class="nav-item">
          <a href="<?= base_url() ?>" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Dashboard
              <!-- <span class="badge badge-info right">2</span> -->
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-globe-asia"></i>
            <p>
              Master
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('pegawai') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Pegawai</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('lemari') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Lemari</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('kategori_peta') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Kategori Peta</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('peta') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Peta</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('kategori_buku') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Kategori Buku</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('buku') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Buku</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-globe-asia"></i>
            <p>
              Register
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('register_peta') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Peta Masuk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('register_peta_rusak_hilang') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Peta Rusak & Hilang</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="<?= base_url('register_peta_hilang') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Peta Hilang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('register_peta_rusak') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Peta Rusak</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="<?= base_url('register_buku') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Buku Masuk</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="<?= base_url('register_buku_hilang') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Buku Hilang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('register_buku_rusak') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Buku Rusak</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="<?= base_url('register_buku_rusak_hilang') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Buku Rusak & Hilang</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-globe-asia"></i>
            <p>
              Laporan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('laporan/peta') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Peta</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('laporan/buku') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Buku</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('laporan/peta_masuk') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Peta Masuk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('laporan/peta_rusak') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Peta Rusak</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('laporan/peta_hilang') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Peta Hilang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('laporan/buku_masuk') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Buku Masuk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('laporan/buku_rusak') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Buku Rusak</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('laporan/buku_hilang') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Buku Hilang</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- <li class="nav-item">
          <a href="<?= base_url('apk') ?>" class="nav-link">
            <i class="nav-icon fab fa-android"></i>
            <p>Download APK</p>
          </a>
        </li> -->

        <!-- <li class="nav-item">
          <a href="<?= base_url('admin/laporan') ?>" target="_blank" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Print Laporan
              <span class="badge badge-info right">2</span>
            </p>
          </a>
        </li> -->

        <!-- <li class="nav-item">
            <a href="<?= base_url('panel/pengaturan') ?>" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Pengaturan
              </p>
            </a>
          </li> -->

        <li class="nav-item my-4">
          <a href="<?= base_url('auth/logout') ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Keluar
              <!-- <span class="badge badge-info right">2</span> -->
            </p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>