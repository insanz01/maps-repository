<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'AppController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['auth'] = "AuthController/index";
$route['auth/do_login'] = "AuthController/do_login";
$route['auth/logout'] = "AuthController/do_logout";

// BUKU
$route['buku'] = "BukuController/index";
$route['buku/add'] = "BukuController/add";
$route['buku/do_add'] = "BukuController/do_add";
$route['buku/detail/(:any)'] = "BukuController/detail/$1";
$route['buku/edit/(:any)'] = "BukuController/edit/$1";
$route['buku/do_edit/(:any)'] = "BukuController/do_edit/$1";
$route['buku/delete'] = "BukuController/delete";

// KATEGORI BUKU
$route['kategori_buku'] = "BukuController/category_index";
$route['kategori_buku/add'] = "BukuController/category_add";
$route['kategori_buku/do_add'] = "BukuController/category_do_add";
$route['kategori_buku/detail/(:any)'] = "BukuController/category_detail/$1";
$route['kategori_buku/edit/(:any)'] = "BukuController/category_edit/$1";
$route['kategori_buku/do_edit/(:any)'] = "BukuController/category_do_edit/$1";
$route['kategori_buku/delete'] = "BukuController/category_delete";

// LEMARI
$route['lemari'] = "LemariController/index";
$route['lemari/add'] = "LemariController/add";
$route['lemari/do_add'] = "LemariController/do_add";
$route['lemari/detail/(:any)'] = "LemariController/detail/$1";
$route['lemari/edit/(:any)'] = "LemariController/edit/$1";
$route['lemari/do_edit/(:any)'] = "LemariController/do_edit/$1";
$route['lemari/delete'] = "LemariController/delete";

// PEGAWAI
$route['pegawai'] = "PegawaiController/index";
$route['pegawai/add'] = "PegawaiController/add";
$route['pegawai/do_add'] = "PegawaiController/do_add";
$route['pegawai/detail/(:any)'] = "PegawaiController/detail/$1";
$route['pegawai/edit/(:any)'] = "PegawaiController/edit/$1";
$route['pegawai/do_edit/(:any)'] = "PegawaiController/do_edit/$1";
$route['pegawai/delete'] = "PegawaiController/delete";

// PETA
$route['peta'] = "PetaController/index";
$route['peta/add'] = "PetaController/add";
$route['peta/do_add'] = "PetaController/do_add";
$route['peta/detail/(:any)'] = "PetaController/detail/$1";
$route['peta/edit/(:any)'] = "PetaController/edit/$1";
$route['peta/do_edit/(:any)'] = "PetaController/do_edit/$1";
$route['peta/delete'] = "PetaController/delete";

// KATEGORI PETA
$route['kategori_peta'] = "PetaController/category_index";
$route['kategori_peta/add'] = "PetaController/category_add";
$route['kategori_peta/do_add'] = "PetaController/category_do_add";
$route['kategori_peta/detail/(:any)'] = "PetaController/category_detail/$1";
$route['kategori_peta/edit/(:any)'] = "PetaController/category_edit/$1";
$route['kategori_peta/do_edit/(:any)'] = "PetaController/category_do_edit/$1";
$route['kategori_peta/delete'] = "PetaController/category_delete";

// JABATAN [DEPRECATED]
$route['jabatan'] = "JabatanController/index";
$route['jabatan/add'] = "JabatanController/add";
$route['jabatan/do_add'] = "JabatanController/do_add";
$route['jabatan/detail/(:any)'] = "JabatanController/detail/$1";
$route['jabatan/edit/(:any)'] = "JabatanController/edit/$1";
$route['jabatan/do_edit/(:any)'] = "JabatanController/do_edit/$1";
$route['jabatan/delete'] = "JabatanController/delete";

// REGISTER ===
// REGISTER PETA
$route['register_peta'] = "PetaController/register_index";
$route['register_peta/add'] = "PetaController/register_add";
$route['register_peta/do_add'] = "PetaController/register_do_add";
$route['register_peta/detail/(:any)'] = "PetaController/register_detail/$1";
$route['register_peta/edit/(:any)'] = "PetaController/register_edit/$1";
$route['register_peta/do_edit/(:any)'] = "PetaController/register_do_edit/$1";
$route['register_peta/delete'] = "PetaController/register_delete";

// REGISTER PETA RUSAK
$route['register_peta_rusak'] = "PetaController/register_rusak_index";
$route['register_peta_rusak/add'] = "PetaController/register_rusak_add";
$route['register_peta_rusak/do_add'] = "PetaController/register_rusak_do_add";
$route['register_peta_rusak/detail/(:any)'] = "PetaController/register_rusak_detail/$1";
$route['register_peta_rusak/edit/(:any)'] = "PetaController/register_rusak_edit/$1";
$route['register_peta_rusak/do_edit/(:any)'] = "PetaController/register_rusak_do_edit/$1";
$route['register_peta_rusak/delete'] = "PetaController/register_rusak_delete";

// REGISTER PETA HILANG
$route['register_peta_hilang'] = "PetaController/register_hilang_index";
$route['register_peta_hilang/add'] = "PetaController/register_hilang_add";
$route['register_peta_hilang/do_add'] = "PetaController/register_hilang_do_add";
$route['register_peta_hilang/detail/(:any)'] = "PetaController/register_hilang_detail/$1";
$route['register_peta_hilang/edit/(:any)'] = "PetaController/register_hilang_edit/$1";
$route['register_peta_hilang/do_edit/(:any)'] = "PetaController/register_hilang_do_edit/$1";
$route['register_peta_hilang/delete'] = "PetaController/register_hilang_delete";

// REGISTER PETA RUSAK HILANG
$route['register_peta_rusak_hilang'] = "PetaController/register_rusak_hilang_index";
$route['register_peta_rusak_hilang/add'] = "PetaController/register_rusak_hilang_add";
$route['register_peta_rusak_hilang/do_add'] = "PetaController/register_rusak_hilang_do_add";
$route['register_peta_rusak_hilang/detail/(:any)'] = "PetaController/register_rusak_hilang_detail/$1";
$route['register_peta_rusak_hilang/edit/(:any)'] = "PetaController/register_rusak_hilang_edit/$1";
$route['register_peta_rusak_hilang/do_edit/(:any)'] = "PetaController/register_rusak_hilang_do_edit/$1";
$route['register_peta_rusak_hilang/delete'] = "PetaController/register_rusak_hilang_delete";

// REGISTER BUKU
$route['register_buku'] = "BukuController/register_index";
$route['register_buku/add'] = "BukuController/register_add";
$route['register_buku/do_add'] = "BukuController/register_do_add";
$route['register_buku/detail/(:any)'] = "BukuController/register_detail/$1";
$route['register_buku/edit/(:any)'] = "BukuController/register_edit/$1";
$route['register_buku/do_edit/(:any)'] = "BukuController/register_do_edit/$1";
$route['register_buku/delete'] = "BukuController/register_delete";

// REGISTER BUKU RUSAK
$route['register_buku_rusak'] = "BukuController/register_rusak_index";
$route['register_buku_rusak/add'] = "BukuController/register_rusak_add";
$route['register_buku_rusak/do_add'] = "BukuController/register_rusak_do_add";
$route['register_buku_rusak/detail/(:any)'] = "BukuController/register_rusak_detail/$1";
$route['register_buku_rusak/edit/(:any)'] = "BukuController/register_rusak_edit/$1";
$route['register_buku_rusak/do_edit/(:any)'] = "BukuController/register_rusak_do_edit/$1";
$route['register_buku_rusak/delete'] = "BukuController/register_rusak_delete";

// REGISTER BUKU HILANG
$route['register_buku_hilang'] = "BukuController/register_hilang_index";
$route['register_buku_hilang/add'] = "BukuController/register_hilang_add";
$route['register_buku_hilang/do_add'] = "BukuController/register_hilang_do_add";
$route['register_buku_hilang/detail/(:any)'] = "BukuController/register_hilang_detail/$1";
$route['register_buku_hilang/edit/(:any)'] = "BukuController/register_hilang_edit/$1";
$route['register_buku_hilang/do_edit/(:any)'] = "BukuController/register_hilang_do_edit/$1";
$route['register_buku_hilang/delete'] = "BukuController/register_hilang_delete";

// REGISTER BUKU RUSAK HILANG
$route['register_buku_rusak_hilang'] = "BukuController/register_rusak_hilang_index";
$route['register_buku_rusak_hilang/add'] = "BukuController/register_rusak_hilang_add";
$route['register_buku_rusak_hilang/do_add'] = "BukuController/register_rusak_hilang_do_add";
$route['register_buku_rusak_hilang/detail/(:any)'] = "BukuController/register_rusak_hilang_detail/$1";
$route['register_buku_rusak_hilang/edit/(:any)'] = "BukuController/register_rusak_hilang_edit/$1";
$route['register_buku_rusak_hilang/do_edit/(:any)'] = "BukuController/register_rusak_hilang_do_edit/$1";
$route['register_buku_rusak_hilang/delete'] = "BukuController/register_rusak_hilang_delete";

// LAPORAN
$route["laporan/buku"] = "LaporanController/buku";
$route["laporan/buku_masuk"] = "LaporanController/buku_masuk";
$route["laporan/buku_rusak"] = "LaporanController/buku_rusak";
$route["laporan/buku_hilang"] = "LaporanController/buku_hilang";

$route["laporan/peta"] = "LaporanController/peta";
$route["laporan/peta_masuk"] = "LaporanController/peta_masuk";
$route["laporan/peta_rusak"] = "LaporanController/peta_rusak";
$route["laporan/peta_hilang"] = "LaporanController/peta_hilang";