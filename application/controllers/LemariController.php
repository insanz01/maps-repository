<?php

class LemariController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("LemariModel", "lemari_m");
    $this->load->model("UtilityModel", "utility_m");
  }

  public function index() {
    $data['lemari'] = $this->lemari_m->get_all();

    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/lemari/index", $data);
    $this->load->view("templates/panel/footer");
  }

  public function add() {
    $last_id = $this->utility_m->get_last_id('lemari');
    $kode_lemari = $this->utility_m->generate_kode('lemari', $last_id);
    $data['lemari'] = ['kode_lemari' => $kode_lemari];

    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/lemari/tambah", $data);
    $this->load->view("templates/panel/footer");
  }

  public function do_add() {
    $data = $this->input->post();

    if($this->lemari_m->add($data)) {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil menambahkan data.</div>");
    } else {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil menambahkan data.</div>");
    }

    redirect('lemari');
  }

  public function edit($id) {
    $data['lemari'] = $this->lemari_m->get_single($id);

    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/lemari/edit", $data);
    $this->load->view("templates/panel/footer");
  }

  public function do_edit($id) {
    $data = $this->input->post();

    if($this->lemari_m->edit($data, $id)) {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil mengubah data.</div>");
    } else {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil mengubah data.</div>");
    }

    redirect('lemari');
  }

  public function delete() {
    $id = $this->input->post('id');

    if($this->lemari_m->delete($id)) {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil menghapus data.</div>");
    } else {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil menghapus data.</div>");
    }

    redirect('lemari');
  }
}