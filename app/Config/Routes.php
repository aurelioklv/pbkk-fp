<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'User::index');
// $routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');
