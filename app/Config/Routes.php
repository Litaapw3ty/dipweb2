<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Auth routes
$routes->get('/', 'Pages::index');

$routes->get('/register', 'Auth::register');
$routes->post('/auth/registerProcess', 'Auth::registerProcess');
$routes->get('/login', 'Auth::login');

$routes->get('/lokasi', 'Lokasi::index');
$routes->get('lokasi/(:segment)', 'Lokasi::index/$1');
