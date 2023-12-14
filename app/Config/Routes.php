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


$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/user/', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/user/(:num)', 'Admin::user/$1', ['filter' => 'role:admin']);


$routes->get('/admin/wisata', 'Wisata::index', ['filter' => 'role:admin']);
$routes->get('/admin/wisata/add', 'Wisata::add', ['filter' => 'role:admin']);
$routes->get('/admin/wisata/edit/(:segment)', 'Wisata::edit/$1', ['filter' => 'role:admin']);
$routes->get('/admin/wisata/(:segment)', 'Wisata::detail/$1', ['filter' => 'role:admin']);
$routes->post('/admin/wisata/save', 'Wisata::save', ['filter' => 'role:admin']);
$routes->post('/admin/wisata/update/(:num)', 'Wisata::update/$1', ['filter' => 'role:admin']);
$routes->delete('/admin/wisata/(:num)', 'Wisata::delete/$1', ['filter' => 'role:admin']);
