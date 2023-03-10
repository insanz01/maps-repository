<?php

class PegawaiController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("PegawaiModel", "pegawai_m");
    $this->load->model("UtilityModel", "utility_m");
  }

  public function index() {
    $data['pegawai'] = $this->pegawai_m->get_all();

    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/pegawai/index", $data);
    $this->load->view("templates/panel/footer");
  }

  public function add() {
    $last_id = $this->utility_m->get_last_id('pegawai');
    $kode_pegawai = $this->utility_m->generate_kode('pegawai', $last_id);
    $data['pegawai'] = ['kode_pegawai' => $kode_pegawai];
    
    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/pegawai/tambah", $data);
    $this->load->view("templates/panel/footer");
  }

  public function do_add() {
    $data = $this->input->post();

    if($this->pegawai_m->add($data)) {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil menambahkan data.</div>");
    } else {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil menambahkan data.</div>");
    }

    redirect('pegawai');
  }

  public function edit($id) {
    $data['pegawai'] = $this->pegawai_m->get_single($id);

    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/pegawai/edit", $data);
    $this->load->view("templates/panel/footer");
  }

  public function do_edit($id) {
    $data = $this->input->post();

    if($this->pegawai_m->edit($data, $id)) {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil mengubah data.</div>");
    } else {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil mengubah data.</div>");
    }

    redirect('pegawai');
  }

  public function delete() {
    $id = $this->input->post('id');

    if($this->pegawai_m->delete($id)) {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil menghapus data.</div>");
    } else {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil menghapus data.</div>");
    }

    redirect('pegawai');
  }
}