<?php

class LaporanController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("LaporanModel", "laporan_m");
  }

  // BUKU
  public function buku() {
    $data['laporan'] = $this->laporan_m->get_all_buku();

    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/laporan/buku/index", $data);
    $this->load->view("templates/panel/footer");
  }

  public function buku_masuk() {
    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/laporan/buku_masuk/index");
    $this->load->view("templates/panel/footer");
  }

  public function buku_hilang() {
    $data['laporan'] = $this->laporan_m->get_all_buku_hilang();

    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/laporan/buku_hilang/index", $data);
    $this->load->view("templates/panel/footer");
  }

  public function buku_rusak() {
    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/laporan/buku_rusak/index");
    $this->load->view("templates/panel/footer");
  }

  // PETA
  public function peta() {
    $data['laporan'] = $this->laporan_m->get_all_peta();

    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/laporan/peta/index", $data);
    $this->load->view("templates/panel/footer");
  }

  public function peta_masuk() {
    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/laporan/peta_masuk/index");
    $this->load->view("templates/panel/footer");
  }

  public function peta_hilang() {
    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/laporan/peta_hilang/index");
    $this->load->view("templates/panel/footer");
  }

  public function peta_rusak() {
    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/laporan/peta_rusak/index");
    $this->load->view("templates/panel/footer");
  }
}