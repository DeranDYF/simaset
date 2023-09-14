<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->setAutoRoute(true);
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
// Start route
// route since we don't have to scan directories.
// $routes->get('/dashboard', 'Pages\Pages::index');

//ALL Navigasi
$routes->get('/', 'Dashboard::index');
$routes->get('/monitoring', 'Pages\Monitoring::index');
$routes->get('/aplikasi', 'Pages\Aplikasi::index');
$routes->get('/user', 'Admin\user::index', ['filter' => 'role:Admin']);
$routes->get('/role', 'Admin\Role::index', ['filter' => 'role:Admin']);
$routes->get('/divisi', 'Admin\Divisi::index', ['filter' => 'role:Admin']);
$routes->get('/aset', 'Aset::index',['filter' => 'role:Admin, Spv. Material Management']);
$routes->get('/kondisi-aset', 'Aset::kondisiAset');
$routes->get('/rekomendasi-aset', 'Aset::rekomendasiAset');
$routes->get('/pengadaan', 'Aset::formPengadaan');
$routes->get('/perbaikan-pergantian', 'Aset::formPerbaikanPergantian');


//Users
$routes->get('/user/detail/(:num)', 'Admin\User::formDetailUser/$1');
$routes->get('/user/ubah/(:num)', 'Admin\User::formEditUser/$1', ['filter' => 'role:Admin']);
$routes->get('/user/ubahsandi/(:num)', 'Admin\User::formChangePassword/$1', ['filter' => 'role:Admin']);
$routes->get('/user/hapus/(:num)', 'Admin\User::deleteUser/$1', ['filter' => 'role:Admin']);
$routes->get('/user/changegroup/(:num)', 'Admin\User::changeGroup/$1', ['filter' => 'role:Admin']);

//Role
$routes->get('/role/tambah', 'Admin\Role::formAddRole', ['filter' => 'role:Admin']);
$routes->get('/role/ubah/(:num)', 'Admin\Role::editrole/$1', ['filter' => 'role:Admin']);
$routes->get('/role/hapus/(:num)', 'Admin\Role::deleterole/$1', ['filter' => 'role:Admin']);

//Divisi
$routes->get('/divisi/ubah/(:num)', 'Admin\Role::editDivisi/$1', ['filter' => 'role:Admin']);
$routes->get('/divisi/hapus/(:num)', 'Admin\Divisi::deleteDivisi/$1', ['filter' => 'role:Admin']);

//Aset
$routes->get('/aset/editaset/(:num)', 'Aset::editAset/$1', ['filter' => 'role:Admin, Spv. Material Management']);

//Aplikasi
$routes->get('/aplikasi/tambah', 'Pages\Aplikasi::tambahAplikasi');
$routes->get('/aplikasi/ubah/(:num)', 'Pages\aplikasi::formUpdateAplikasi/$1');
$routes->get('/aplikasi/hapus/(:num)', 'Pages\aplikasi::hapus/$1');

//Modul
$routes->get('/modulaplikasi', 'Pages\ModulAplikasi::index');
$routes->get('/modulaplikasi/(:num)', 'Pages\ModulAplikasi::index/$1');
$routes->get('/modulaplikasi/tambah/(:num)', 'Pages\ModulAplikasi::tambahModulAplikasi/$1');
$routes->post('/modulaplikasi/save/(:num)', 'Pages\ModulAplikasi::saveModulAplikasi/$1');
$routes->get('/modulaplikasi/formubah/(:num)', 'Pages\ModulAplikasi::formUpdateModulAplikasi/$1');
$routes->post('/modulaplikasi/ubah/(:num)/(:num)', 'Pages\ModulAplikasi::updateModulAplikasi/$1/$2');
$routes->get('/modulaplikasi/delete/(:num)/(:num)', 'Pages\ModulAplikasi::deleteModul/$1/$2');



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
