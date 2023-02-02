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
}