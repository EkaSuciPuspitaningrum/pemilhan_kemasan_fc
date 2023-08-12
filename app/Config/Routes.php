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

//autentikasi (login, regis dan kawan2)
$routes->get('/login_admin', 'Auth::login_admin');
$routes->post('/login_admin', 'Auth::aksi_login');

$routes->get('/login_pakar', 'Auth::login_pakar');
$routes->post('/login_pakar', 'Auth::aksi_login_pakar');
$routes->get('/registrasi_pakar', 'Auth::registrasi_pakar');
$routes->post('/registrasi_pakar', 'Auth::registrasi');




$routes->get('/dashboard_admin', 'Admin::dashboard_admin');

$routes->get('/jenis_kemasan_admin', 'Admin::jenis_kemasan_admin');
$routes->post('/jenis_kemasan_create', 'Admin::jenis_kemasan_create');
$routes->add('add_edit_data/(:num)?', 'Admin::add_edit_data/$1');
$routes->get('/jenis_kemasan/hapus/(:num)', 'Admin::jenis_kemasan_delete/$1');

$routes->get('/kriteria_produk', 'Admin::kriteria_produk');
$routes->post('/kriteria_produk', 'Admin::kriteria_produk_create');
$routes->get('/kriteria_produk/edit', 'Admin::kriteria_produk_edit');
$routes->post('/kriteria_produk/hapus(:num)', 'Admin::kriteria_produk_delete/$1');

$routes->get('/basis_pengetahuan', 'Admin::basis_pengetahuan');
$routes->post('/basis_pengetahuan', 'Admin::basis_pengetahuan_create');

$routes->get('/akun', 'Admin::akun');


// $routes->get('/dashboard_pakar', 'Pakar::dashboard_pakar');

// $routes->get('/akun_pakar', 'Pakar::akun');

// $routes->get('/jenis_kemasan_pakar', 'Pakar::jenis_kemasan');
// $routes->post('/jenis_kemasan_pakar', 'Pakar::jenis_kemasan_create');
// $routes->get('/jenis_kemasan_pakar/edit/(:segment)', 'Pakar::jenis_kemasan_edit/$1');
// $routes->post('/jenis_kemasan_pakar/update/(:segment)', 'Pakar::jenis_kemasan_update/$1');
// $routes->get('/jenis_kemasan_pakar/hapus/(:segment)', 'Pakar::jenis_kemasan_delete/$1');

// $routes->get('/kriteria_produk_pakar', 'Pakar::kriteria_produk');
// $routes->post('/kriteria_produk_pakar', 'Pakar::kriteria_produk_create');
// $routes->get('/kriteria_produk_pakar/edit', 'Pakar::kriteria_produk_edit');
// $routes->post('/kriteria_produk_pakar/hapus(:num)', 'Pakar::kriteria_produk_delete/$1');

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
