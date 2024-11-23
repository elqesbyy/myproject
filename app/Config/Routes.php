<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 
$routes->get('/', 'Home::index');
$routes->get('admin', 'AdminController::index');
$routes->get('admin/create', 'AdminController::create');
$routes->post('admin/store', 'AdminController::store');
// $routes->get('test', 'TestController::index');
// $routes->post('test', 'TestController::store');



// $routes->group('admin', function($routes) {
    // $routes->get('admin', 'AdminController::index');
    // $routes->get('admin/create', 'AdminController::create');
    // $routes->post('admin/store', 'AdminController::store');
    // $routes->get('admin/edit/(:num)', 'AdminController::edit/$1');
    // $routes->post('admin/update/(:num)', 'AdminController::update/$1');
    // $routes->get('admin/delete/(:num)', 'AdminController::delete/$1');
// });


