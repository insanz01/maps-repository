<?php

class PetaModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_all() {
    return $this->db->get('peta')->result_array();
  }

  public function get_single($id) {
    return $this->db->get_where('peta', ['id' => $id])->row_array();
  }

  public function add($data) {
    return $this->db->insert('peta', $data);
  }

  public function edit($data, $id) {
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update('peta');

    return $this->db->affected_rows();
  }

  public function delete($id) {
    return $this->db->delete('peta', ['id' => $id]);
  }

  public function get_all_category() {
    return $this->db->get('kategori_peta')->result_array();
  }

  public function get_single_category($id) {
    return $this->db->get_where('kategori_peta', ['id' => $id])->row_array();
  }

  public function add_category($data) {
    return $this->db->insert('kategori_peta', $data);
  }

  public function edit_category($data, $id) {
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update('kategori_peta');

    return $this->db->affected_rows();
  }

  public function delete_category($id) {
    return $this->db->delete('kategori_peta', ['id' => $id]);
  }

  public function get_all_register() {
    $query = "SELECT pm.id, pm.kode_peta_masuk, p.nama_peta, pm.tanggal, pj.nama_pegawai, pm.jumlah FROM peta_masuk pm JOIN peta p ON pm.kode_peta = p.id JOIN pegawai pj ON pm.penanggung_jawab = pj.id";

    return $this->db->query($query)->result_array();
  }

  public function get_single_register($id) {
    $query = "SELECT pm.id, pm.kode_peta_masuk, p.nama_peta, pm.tanggal, pj.nama_pegawai, pm.jumlah FROM peta_masuk pm JOIN peta p ON pm.kode_peta = p.id JOIN pegawai pj ON pm.penanggung_jawab = pj.id WHERE pm.id = $id";

    return $this->db->query($query)->row_array();
  }

  public function add_register($data) {
    return $this->db->insert('peta_masuk', $data);
  }

  public function edit_register($data, $id) {
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update('peta_masuk');

    return $this->db->affected_rows();
  }

  public function delete_register($id) {
    return $this->db->delete('peta_masuk', ['id' => $id]);
  }
  
  // rusak hilang
  public function get_all_rusak_hilang() {
    $query = "SELECT prh.id, prh.kode_peta_rusak_hilang, prh.kode_peta, b.nama_peta, prh.tanggal, prh.jumlah, sb.nama_status as status, prh.keterangan FROM peta_rusak_hilang prh JOIN peta b ON prh.kode_peta = b.id JOIN status_barang sb ON prh.status = sb.id";

    return $this->db->query($query)->result_array();
  }

  public function get_single_rusak_hilang($id) {
    $query = "SELECT prh.id, prh.kode_peta_rusak_hilang, prh.kode_peta, b.nama_peta, prh.tanggal, prh.jumlah, sb.nama_status as status, prh.keterangan FROM peta_rusak_hilang prh JOIN peta b ON prh.kode_peta = b.id JOIN status_barang sb ON prh.status = sb.id WHERE prh.id = $id";

    return $this->db->query($query)->row_array();
  }

  public function add_rusak_hilang($data) {
    return $this->db->insert('peta_rusak_hilang', $data);
  }

  public function edit_rusak_hilang($data, $id) {
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update('peta_rusak_hilang');

    return $this->db->affected_rows();
  }

  public function delete_rusak_hilang($id) {
    return $this->db->delete('peta_rusak_hilang', ['id' => $id]);
  }
}