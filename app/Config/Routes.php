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
        $routes->get('notes', 'AdminNoteController::index');
        $routes->get('notes/create', 'AdminNoteController::create');
        $routes->post('notes/store', 'AdminNoteController::store');
        $routes->get('notes/view/(:any)', 'AdminNoteController::show/$1');
        $routes->get('notes/edit/(:any)', 'AdminNoteController::edit/$1');
        $routes->post('notes/update/(:any)', 'AdminNoteController::update/$1');
        $routes->delete('notes/delete/(:any)', 'AdminNoteController::delete/$1');
    });
});



$routes->get('/notes', 'NoteController::index');
$routes->get('/notes/view/(:any)', 'NoteController::show/$1');
