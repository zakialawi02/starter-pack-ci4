<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/notes', 'Note::index');
$routes->get('/notes/create', 'Note::create');
$routes->post('/notes/store', 'Note::store');
