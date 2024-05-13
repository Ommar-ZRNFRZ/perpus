<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/halaman_buku', 'Crud::buku');
$routes->get('/daftar', 'Daftar::daftar');
$routes->get('/masuk', 'Masuk::masuk');
$routes->get('/contact', 'Tampilan::contact');
$routes->get('/index', 'Tampilan::index');
$routes->get('/product', 'Tampilan::product');
$routes->get('/shop', 'Tampilan::shop');
