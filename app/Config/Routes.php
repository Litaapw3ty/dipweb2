<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Beranda::index'); // default ke controller Beranda
$routes->get('/beranda', 'Beranda::index'); // akses /beranda

// Auth routes
$routes->get('/register', 'Auth::register');
$routes->post('/auth/registerProcess', 'Auth::registerProcess');
$routes->get('/login', 'Auth::login');

$routes->get('/lokasi', 'Lokasi::index');
$routes->get('lokasi/(:segment)', 'Lokasi::index/$1');
