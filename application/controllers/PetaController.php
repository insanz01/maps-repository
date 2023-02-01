<?php

class PetaController extends CI_Controller {
  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/peta/index");
    $this->load->view("templates/panel/footer");
  }

  public function category_index() {
    $this->load->view("templates/panel/header");
    $this->load->view("templates/panel/sidebar");
    $this->load->view("templates/panel/navbar");
    $this->load->view("app/peta/kategori");
    $this->load->view("templates/panel/footer");
  }
}