<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);

$routes->get('/', 'Pages::index');

$routes->get('/halaman_buku', 'Crud::buku');
$routes->get('/daftar', 'masuk::daftar');
$routes->get('/masuk', 'Masuk::masuk');

/**Landing page */
$routes->get('/contact', 'Tampilan::contact');
$routes->get('/index', 'Tampilan::index');
$routes->get('/product', 'Tampilan::product');
$routes->get('/shop', 'Tampilan::shop');

/**Dashboard */
$routes->get('/dashboard', 'dashboard::main');
$routes->get('/datauser', 'dashboard::datauser');
$routes->get('/databuku', 'dashboard::databuku');

/**CRUD buku */
$routes->get('/komik/create', 'Komik::create');
$routes->get('/komik/edit/(:segment)', 'Komik::edit/$1');
$routes->delete('/komik/(:num)', 'Komik::delete/$1');
$routes->get('/komik/(:any)', 'Komik::detail/$1');