<?php

class BukuModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_all() {
    return $this->db->get('buku')->result_array();
  }

  public function get_single($id) {
    return $this->db->get_where('buku', ['id' => $id])->result_array();
  }

  public function add($data) {
    return $this->db->insert('buku', $data);
  }

  public function edit($data, $id) {
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update('buku');

    return $this->db->affected_rows();
  }

  public function delete($id) {
    return $this->db->delete('buku', ['id' => $id]);
  }

  public function get_all_category() {
    return $this->db->get('kategori_buku')->result_array();
  }

  public function get_single_category($id) {
    return $this->db->get_where('kategori_buku', ['id' => $id])->row_array();
  }

  public function add_category($data) {
    return $this->db->insert('kategori_buku', $data);
  }

  public function edit_category($data, $id) {
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update('kategori_buku');

    return $this->db->affected_rows();
  }

  public function delete_category($id) {
    return $this->db->delete('kategori_buku', ['id' => $id]);
  }

  public function get_all_register() {
    $query = "SELECT bm.id, bm.kode_buku_masuk, p.nama_buku, bm.tanggal, pj.nama_pegawai, bm.jumlah FROM buku_masuk bm JOIN buku p ON bm.kode_buku = p.id JOIN pegawai pj ON bm.penanggung_jawab = pj.id";

    return $this->db->query($query)->result_array();
  }

  public function get_single_register($id) {
    $query = "SELECT bm.id, bm.kode_buku_masuk, p.nama_buku, bm.tanggal, pj.nama_pegawai, bm.jumlah FROM buku_masuk bm JOIN buku p ON bm.kode_buku = p.id JOIN pegawai pj ON bm.penanggung_jawab = pj.id WHERE bm.id = $id";

    return $this->db->query($query)->row_array();
  }

  public function add_register($data) {
    return $this->db->insert('buku_masuk', $data);
  }

  public function edit_register($data, $id) {
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update('buku_masuk');

    return $this->db->affected_rows();
  }

  public function delete_register($id) {
    return $this->db->delete('buku_masuk', ['id' => $id]);
  }

  // rusak hilang
  public function get_all_rusak_hilang() {
    $query = "SELECT brh.id, brh.kode_buku_rusak_hilang, brh.kode_buku, b.nama_buku, brh.tanggal, brh.jumlah, sb.nama_status as status, brh.keterangan FROM buku_rusak_hilang brh JOIN buku b ON brh.kode_buku = b.id JOIN status_barang sb ON brh.status = sb.id";

    return $this->db->query($query)->result_array();
  }

  public function get_single_rusak_hilang($id) {
    $query = "SELECT brh.id, brh.kode_buku_rusak_hilang, brh.kode_buku, b.nama_buku, brh.tanggal, brh.jumlah, sb.nama_status as status, brh.keterangan FROM buku_rusak_hilang brh JOIN buku b ON brh.kode_buku = b.id JOIN status_barang sb ON brh.status = sb.id WHERE brh.id = $id";

    return $this->db->query($query)->row_array();
  }

  public function add_rusak_hilang($data) {
    return $this->db->insert('buku_rusak_hilang', $data);
  }

  public function edit_rusak_hilang($data, $id) {
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update('buku_rusak_hilang');

    return $this->db->affected_rows();
  }

  public function delete_rusak_hilang($id) {
    return $this->db->delete('buku_rusak_hilang', ['id' => $id]);
  }
}