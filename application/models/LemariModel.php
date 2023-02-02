<?php

class LemariModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_all() {
    return $this->db->get('lemari')->result_array();
  }

  public function get_single($id) {
    return $this->db->get_where('lemari', ['id' => $id])->row_array();
  }

  public function add($data) {
    return $this->db->insert('lemari', $data);
  }

  public function edit($data, $id) {
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update('lemari');

    return $this->db->affected_rows();
  }

  public function delete($id) {
    return $this->db->delete('lemari', ['id' => $id]);
  }
}