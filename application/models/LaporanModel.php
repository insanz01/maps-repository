<?php

class LaporanModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  // BUKU
  public function get_all_buku() {
    $query = "SELECT b.id, b.kode_buku, b.nama_buku, kb.nama_kategori as kategori_buku, l.nama_lemari as lemari_buku FROM buku b JOIN kategori_buku as kb ON b.kode_kategori_buku = kb.id JOIN lemari l ON b.kode_lemari_buku = l.id";

    return $this->db->query($query)->result_array();
  }

  public function get_all_buku_masuk() {
    $query = "SELECT * FROM buku_masuk";

    return $this->db->query($query)->result_array();
  }

  public function get_all_buku_rusak() {
    $query = "SELECT brh.id, brh.kode_buku_rusak_hilang, brh.kode_buku, b.nama_buku, brh.tanggal, brh.jumlah, sb.nama_status as status, brh.keterangan FROM buku_rusak_hilang brh JOIN buku b ON brh.kode_buku = b.id JOIN status_barang sb ON brh.status = sb.id WHERE brh.status = 1";

    return $this->db->query($query)->result_array();
  }

  public function get_all_buku_hilang() {
    $query = "SELECT brh.id, brh.kode_buku_rusak_hilang, brh.kode_buku, b.nama_buku, brh.tanggal, brh.jumlah, sb.nama_status as status, brh.keterangan FROM buku_rusak_hilang brh JOIN buku b ON brh.kode_buku = b.id JOIN status_barang sb ON brh.status = sb.id WHERE brh.status = 2";

    return $this->db->query($query)->result_array();
  }

  // PETA
  public function get_all_peta() {
    $query = "SELECT p.id, p.kode_peta, p.nama_peta, kp.nama_kategori as kategori_peta, l.nama_lemari as lemari_peta FROM peta p JOIN kategori_peta kp ON p.kode_kategori_peta = kp.id JOIN lemari l ON p.kode_lemari_peta = l.id";

    return $this->db->query($query)->result_array();
  }

  public function get_all_peta_masuk() {
    $query = "SELECT * FROM peta_masuk";

    return $this->db->query($query)->result_array();
  }

  public function get_all_peta_rusak() {
    $query = "SELECT prh.id, prh.kode_peta_rusak_hilang, prh.kode_peta, b.nama_peta, prh.tanggal, prh.jumlah, sb.nama_status as status, prh.keterangan FROM peta_rusak_hilang prh JOIN peta b ON prh.kode_peta = b.id JOIN status_barang sb ON prh.status = sb.id WHERE prh.status = 1";

    return $this->db->query($query)->result_array();
  }

  public function get_all_peta_hilang() {
    $query = "SELECT prh.id, prh.kode_peta_rusak_hilang, prh.kode_peta, b.nama_peta, prh.tanggal, prh.jumlah, sb.nama_status as status, prh.keterangan FROM peta_rusak_hilang prh JOIN peta b ON prh.kode_peta = b.id JOIN status_barang sb ON prh.status = sb.id WHERE prh.status = 2";

    return $this->db->query($query)->result_array();
  }
}