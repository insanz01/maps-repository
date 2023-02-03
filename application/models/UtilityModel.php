<?php

class UtilityModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_last_id($table_name) {
    $id = 0;

    $data = $this->db->get($table_name)->last_row();

    if($data) {
      $id = $data->id;
    }

    return $id;
  }

  private function build_kode($last_id) {
    $id_string = (string)($last_id+1);
    $strlen = strlen($id_string);

    $kode = "";

    for ($i = 0; $i < 6 - $strlen; $i++) {
      $kode .= "0";
    }

    $kode .= $id_string;

    return $kode;
  }

  public function generate_kode($table_name, $last_id) {
    switch($table_name) {
      case 'pegawai':
        if ($last_id == 0) {
          return 'PG_000001';
        }

        $kode = $this->build_kode($last_id);

        return 'PG_' . $kode;
        break;
      case 'buku':
        if ($last_id == 0) {
          return 'BK_000001';
        }

        $kode = $this->build_kode($last_id);

        return 'BK_' . $kode;
        break;
      case 'peta':
        if ($last_id == 0) {
          return 'PT_000001';
        }

        $kode = $this->build_kode($last_id);

        return 'PT_' . $kode;
        break;
      case 'lemari':
        if ($last_id == 0) {
          return 'LM_000001';
        }

        $kode = $this->build_kode($last_id);

        return 'LM_' . $kode;
        break;
      case 'peta_masuk':
        if ($last_id == 0) {
          return 'PM_000001';
        }

        $kode = $this->build_kode($last_id);

        return 'PM_' . $kode;
        break;
      case 'buku_masuk':
        if ($last_id == 0) {
          return 'BM_000001';
        }

        $kode = $this->build_kode($last_id);

        return 'BM_' . $kode;
        break;
      case 'peta_rusak_hilang':
        if ($last_id == 0) {
          return 'PRH_000001';
        }

        $kode = $this->build_kode($last_id);

        return 'PRH_' . $kode;
        break;
      case 'buku_rusak_hilang':
        if ($last_id == 0) {
          return 'BRH_000001';
        }

        $kode = $this->build_kode($last_id);

        return 'BRH_' . $kode;
        break;
      default:
        return "XX_XXXXXX";
    }
  }

  public function get_status() {
    return $this->db->get("status_barang")->result_array();
  }
}