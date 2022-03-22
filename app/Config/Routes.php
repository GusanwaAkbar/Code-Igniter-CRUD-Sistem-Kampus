<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//Dewana
$routes->get('/', 'Home::index');

$routes->get('/skripsi', 'SkripsiController::index');
$routes->get('/tambahkanskripsi', 'SkripsiController::index_tambahkan');


$routes->get('/sidang', 'SkripsiController::index_sidang');
$routes->get('/berhasilskripsi', 'SkripsiController::index_berhasil');
//Dewana



//Dimas
$routes->get('/approvecuti', 'Cuticontroller::index');
$routes->get('/approvecuti/(:segment)', 'Cuticontroller::setujui/$1');

$routes->get('/mahasiswacuti', 'Cuticontroller::index_disetujui');
//Dimas


//Kelompok 4

$routes->get('/pkl', 'Pklrizalcontroller::index');
$routes->get('/pkl', 'Pklrizalcontroller::create');


$routes->get('/pkl_disetujui', 'Pklrizalcontroller::index_setuju');

// Kelompok 4


// kel 3 zuy
$routes->get('/universitas_pkl', 'Mahasiswacontroller::index');
$routes->get('/universitas_pkl', 'Mahasiswacontroller::create');

//kel 3


//fikri
$routes->get('/dosen', 'Dosen::index');
$routes->get('/kegiatan', 'Kegiatan::index');
$routes->get('/komunitas', 'Komunitas::index');
$routes->get('/lab', 'Lab::index');


//fikri




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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
