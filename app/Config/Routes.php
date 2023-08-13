<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

//autentikasi (login, regis admin pakar)
$routes->get('/login_admin', 'Auth::login_admin');
$routes->post('/login_admin', 'Auth::aksi_login');

$routes->get('/login_pakar', 'Auth::login_pakar');
$routes->post('/login_pakar', 'Auth::aksi_login_pakar');
$routes->get('/registrasi_pakar', 'Auth::registrasi_pakar');
$routes->post('/registrasi_pakar', 'Auth::registrasi_pakar_create');

$routes->get('data_admin', 'Admin::data_admin');
$routes->post('/data_admin_create', 'Admin::data_admin_create');
$routes->add('add_edit_data_admin/(:num)?', 'Admin::add_edit_data_admin/$1');
$routes->get('/data_admin/hapus/(:num)', 'Admin::data_admin_delete/$1');

$routes->get('data_pakar', 'Admin::data_pakar');
$routes->post('/data_pakar_create', 'Admin::data_pakar_create');
$routes->add('add_edit_data_pakar/(:num)?', 'Admin::add_edit_data_pakar/$1');
$routes->get('/data_pakar/hapus/(:num)', 'Admin::data_pakar_delete/$1');

$routes->get('data_calon_pakar', 'Admin::data_calon_pakar');
$routes->add('show_data_calon/(:num)?', 'Admin::show_data/$1');
$routes->post('transfer_data/(:num)', 'Admin::transfer_data/$1');
$routes->get('/data_calon_pakar/hapus/(:num)', 'Admin::data_calon_pakar_hapus/$1');

$routes->get('/dashboard_admin', 'Admin::dashboard_admin');

$routes->get('/jenis_kemasan_admin', 'Admin::jenis_kemasan_admin');

$routes->post('/jenis_kemasan_create', 'Admin::jenis_kemasan_create');
$routes->add('add_edit_data/(:num)?', 'Admin::add_edit_data/$1');
$routes->get('/jenis_kemasan/hapus/(:num)', 'Admin::jenis_kemasan_delete/$1');

$routes->get('/kriteria_produk', 'Admin::kriteria_produk');
$routes->post('/kriteria_produk', 'Admin::kriteria_produk_create');
$routes->get('/kriteria_produk/edit', 'Admin::kriteria_produk_edit');
$routes->post('/kriteria_produk/hapus(:num)', 'Admin::kriteria_produk_delete/$1');

$routes->add('edit_kriteria/(:num)?', 'Admin::edit_kriteria/$1');
$routes->get('/kriteria/hapus/(:num)', 'Admin::kriteria_delete/$1');

$routes->add('edit_pengetahuan/(:num)?', 'Admin::edit_pengetahuan/$1');
$routes->get('/pengetahuan/hapus/(:num)', 'Admin::pengetahuan_delete/$1');

$routes->get('/data_pakar', 'Admin::data_pakar');
$routes->get('/logout_admin', 'Admin::logout');



$routes->get('/basis_pengetahuan_pakar', 'Pakar::basis_pengetahuan');
$routes->post('/basis_pengetahuan_pakar_create', 'Pakar::basis_pengetahuan_create');
$routes->add('/add_edit_pakar_data/edit','Pakar::edit_pengetahuan/$1');
$routes->get('/basis_pengetahuan_pakar/hapus/(:num)', 'Pakar::basis_pengetahuan_delete/$1');

$routes->get('/dashboard_pakar', 'Pakar::dashboard_pakar');
$routes->get('/jenis_kemasan_pakar', 'Pakar::jenis_kemasan');
$routes->post('/jenis_kemasan_pakar_create', 'Pakar::jenis_kemasan_create');
$routes->add('add_edit_pakar_data/(:num)?', 'Pakar::add_edit_data/$1');
$routes->get('/jenis_kemasan_pakar/hapus/(:num)', 'Pakar::jenis_kemasan_delete/$1');

$routes->get('/kriteria_produk_pakar', 'Pakar::kriteria_produk');
$routes->post('/kriteria_produk_pakar', 'Pakar::kriteria_produk_create');
$routes->add('add_edit_pakar_data_kriteria/(:num)?', 'Pakar::edit_data_kriteria/$1');
$routes->get('/kriteria_produk_pakar/hapus/(:num)', 'Pakar::kriteria_produk_delete/$1');
$routes->get('/logout_pakar', 'Pakar::logout');



$routes->get('/pencarian_kemasan', 'User::pencarian_kemasan');
$routes->post('/pencarian_kemasan', 'Perhitungan::pencarian');
$routes->get('/riwayat_pencarian', 'User::riwayat_pencarian');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
