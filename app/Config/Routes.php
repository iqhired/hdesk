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


$routes->get('/', 'Home1::index');
$routes->get('homepage', 'Home1::homepage1');


$routes->get('check_in', 'Home1::checkin');
$routes->get('check_inn', 'Home1::checkin1');

$routes->get('checkin_msg', 'Home1::checkinmsg');
$routes->get('checkintable', 'Home1::tablecheckin');
$routes->get('editcheckin/(:num)', 'Home1::editcheckin/$1');
$routes->post('check/updatein/(:num)', 'Home1::updatein/$1');
$routes->get('deletecheckin/(:num)', 'Home1::deletecheckin/$1');
$routes->post('checkin_store', 'Home1::store');

$routes->get('check_out', 'Home1::checkout');
$routes->get('check_outmsg', 'Home1::checkoutmsg');


$routes->get('loginpage', 'Home1::login');
$routes->post('login_store', 'Home1::loginstore');

$routes->get('user_login', 'Home1::userlogin');
$routes->post('user_store', 'Home1::userstore');
$routes->get('login_table', 'Home1::logintable');
$routes->get('editlogin/(:num)', 'Home1::editlogin/$1');
$routes->post('check/updatelogin/(:num)', 'Home1::updatelogin/$1');
$routes->get('deletelogin/(:num)', 'Home1::deletelogin/$1');

$routes->get('check_outt', 'Home1::checkout1');
$routes->get('logs', 'Home1::log_detail');

$routes->post('checkout_store', 'Home1::storeout');


$routes->get('/', 'UsersController::index');
$routes->get('exportData', 'UsersController::exportData');

$routes->get('/', 'UsersController1::index');
$routes->get('exportData1', 'UsersController1::exportData');





















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
