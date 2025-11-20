<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');

$routes->get('/register', 'Auth::register');
$routes->post('/auth/registerProcess', 'Auth::registerProcess');
$routes->get('/login', 'Auth::login');
