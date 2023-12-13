<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Page::index');
// $routes->get('/login', 'Home::login');
$routes->get('/home', 'Page::index');
$routes->get('/wisata', 'Page::wisata');
$routes->get('/paket-wisata', 'Page::paket');
$routes->get('/kategori', 'Page::kategori');
$routes->get('/user', 'Page::user');
