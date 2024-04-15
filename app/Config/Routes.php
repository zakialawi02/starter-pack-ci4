<?php

use App\Controllers\Home;
use App\Controllers\NoteController;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminNoteController;
use App\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('', ['filter' => 'role:Admin,User'], function ($routes) {
    $routes->get('/dashboard', 'DashboardController::index');
    $routes->get('/admin/notes', 'AdminNoteController::index');
    $routes->get('/admin/notes/create', 'AdminNoteController::create');
    $routes->post('/admin/notes/store', 'AdminNoteController::store');
    $routes->get('/admin/notes/view/(:any)', 'AdminNoteController::show/$1');
    $routes->get('/admin/notes/edit/(:any)', 'AdminNoteController::edit/$1');
    $routes->post('/admin/notes/update/(:any)', 'AdminNoteController::update/$1');
    $routes->delete('/admin/notes/delete/(:any)', 'AdminNoteController::delete/$1');
});

$routes->get('/notes', 'NoteController::index');
$routes->get('/notes/view/(:any)', 'NoteController::show/$1');
