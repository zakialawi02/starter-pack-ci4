<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('dashboard', [], function ($routes) {

    $routes->group('', ['filter' => 'role:Admin,User'], function ($routes) {
        $routes->get('/', 'DashboardController::index');
    });

    $routes->group('', ['filter' => 'role:Admin'], function ($routes) {
        $routes->get('notes', 'NoteController::indexDashboard');
        $routes->get('notes/create', 'NoteController::create');
        $routes->post('notes/store', 'NoteController::store');
        $routes->get('notes/view/(:any)', 'NoteController::view/$1');
        $routes->get('notes/edit/(:any)', 'NoteController::edit/$1');
        $routes->post('notes/update/(:any)', 'NoteController::update/$1');
        $routes->delete('notes/delete/(:any)', 'NoteController::delete/$1');
    });
});



$routes->get('/notes', 'NoteController::index');
$routes->get('/notes/view/(:any)', 'NoteController::show/$1');
