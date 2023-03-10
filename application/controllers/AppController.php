<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AppController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/dashboard');
    $this->load->view('templates/panel/footer');
  }
}
