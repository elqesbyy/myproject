<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('admin', function($routes) {
    $routes->get('admin', 'Admin\AdminController::index');
    $routes->get('admin/create', 'Admin\AdminController::create');
    $routes->post('admin/store', 'Admin\AdminController::store');
    $routes->get('admin/edit/(:num)', 'Admin\AdminController::edit/$1');
    $routes->post('admin/update/(:num)', 'Admin\AdminController::update/$1');
    $routes->get('admin/delete/(:num)', 'Admin\AdminController::delete/$1');
});

