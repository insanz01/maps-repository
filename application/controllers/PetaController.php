<?php

class PetaController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("PetaModel", "peta_m");
    $this->load->model("LemariModel", "lemari_m");
    $this->load->model("UtilityModel", "utility_m");
  }

  public function index() {
    $data['peta'] = $this->peta_m->get_all();

    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/peta/index", $data);
    $this->load->view("templates/panel/footer");
  }

  public function add() {
    $last_id = $this->utility_m->get_last_id('peta');
    $kode_peta = $this->utility_m->generate_kode('peta', $last_id);
    $data['peta'] = ['kode_peta' => $kode_peta];

    $data['kategori_peta'] = $this->peta_m->get_all_category();
    $data['lemari'] = $this->lemari_m->get_all();

    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/peta/tambah", $data);
    $this->load->view("templates/panel/footer");
  }

  public function do_add() {
    $data = $this->input->post();

    if($this->peta_m->add($data)) {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil menambahkan data.</div>");
    } else {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil menambahkan data.</div>");
    }

    redirect('peta');
  }

  public function edit($id) {
    $data['peta'] = $this->peta_m->get_single($id);

    $data['kategori_peta'] = $this->peta_m->get_all_category();
    $data['lemari'] = $this->lemari_m->get_all();

    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/peta/edit", $data);
    $this->load->view("templates/panel/footer");
  }

  public function do_edit($id) {
    $data = $this->input->post();

    if($this->peta_m->edit($data, $id)) {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil mengubah data.</div>");
    } else {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil mengubah data.</div>");
    }

    redirect('peta');
  }

  public function delete() {
    $id = $this->input->post('id');

    if($this->peta_m->delete($id)) {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil menghapus data.</div>");
    } else {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil menghapus data.</div>");
    }

    redirect('peta');
  }

  public function category_index() {
    $data['kategori_peta'] = $this->peta_m->get_all_category();

    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/peta/kategori", $data);
    $this->load->view("templates/panel/footer");
  }

  public function category_add() {
    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/peta/tambah_kategori");
    $this->load->view("templates/panel/footer");
  }

  public function category_do_add() {
    $data = $this->input->post();

    if($this->peta_m->add_category($data)) {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil menambahkan data.</div>");
    } else {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil menambahkan data.</div>");
    }

    redirect('kategori_peta');
  }

  public function category_edit($id) {
    $data['peta'] = $this->peta_m->get_single_category($id);

    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/peta/edit_kategori", $data);
    $this->load->view("templates/panel/footer");
  }

  public function category_do_edit($id) {
    $data = $this->input->post();

    if($this->peta_m->edit_category($data, $id)) {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil mengubah data.</div>");
    } else {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil mengubah data.</div>");
    }

    redirect('kategori_peta');
  }

  public function category_delete() {
    $id = $this->input->post('id');

    if($this->peta_m->delete_category($id)) {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil menghapus data.</div>");
    } else {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil menghapus data.</div>");
    }

    redirect('kategori_peta');
  }
}