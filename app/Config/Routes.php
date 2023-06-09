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

// ADMIN
$routes->get('index', 'admin\Index::awal');
$routes->get('paketA', 'admin\Paket::awal');
$routes->get('tambah', 'admin\Paket::tambah');
$routes->post('paket/simpan', 'admin\Paket::simpan');
$routes->delete('/Paket/(:num)', 'admin\Paket::delete/$1');
$routes->get('tentangkami', 'admin\Index::kami');
$routes->get('bookingA', 'admin\Booking::index');
$routes->get('trainer', 'Admin\Trainer::index');
$routes->get('tambaht', 'Admin\Trainer::tambah');
$routes->post('trainer/simpan', 'Admin\Trainer::simpan');
$routes->delete('trainer/(:num)', 'Admin\Trainer::delete/$1');


// CUSTOMER
$routes->get('/', 'Home::index');
$routes->get('profil', 'Tentangkami::awal');
$routes->get('paket', 'Customer\PaketC::awal');
$routes->get('booking', 'Customer\BookingC::awal');
$routes->post('bookingc/save', 'Customer\BookingC::save');
$routes->get('bayar', 'Customer\Bayar::awal');

// 
// 

$routes->get('login', 'Login::index');
$routes->get('register', 'Register::index');
$routes->get('lupasandi', 'LupaSandi::index');

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
