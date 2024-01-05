<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/products', 'C_Products::index');
$routes->get('/login', 'C_Login::index');
$routes->get('/product/(:segment)','C_Products::detail/$1');
$routes->get('/checkout/(:segment)', 'C_Transaksi::index/$1');
$routes->post('/beli', 'C_Transaksi::beli');
$routes->post('/regist', 'C_Login::register');
$routes->post('/login', 'C_Login::login');
$routes->get('/logout', 'C_Login::logout');
$routes->get('/profile', 'Home::profile');
$routes->post('/edit', 'C_Login::edit');
$routes->get('/hapus/(:segment)', 'C_Login::hapus/$1');