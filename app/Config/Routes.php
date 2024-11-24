<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 
$routes->get('/', 'Home::index');
$routes->get('admin/index', 'AdminController::index');
$routes->get('admin/create', 'AdminController::create');
$routes->post('admin/store', 'AdminController::store');
$routes->get('admin/edit/(:num)', 'AdminController::edit/$1');
$routes->post('admin/update/(:num)', 'AdminController::update/$1');
$routes->get('admin/delete/(:num)', 'AdminController::delete/$1');




$routes->get('/filiere', 'FiliereController::index');
$routes->get('/filiere/create', 'FiliereController::create');
$routes->post('/filiere/store', 'FiliereController::store');
$routes->get('/filiere/edit/(:num)', 'FiliereController::edit/$1');
$routes->post('/filiere/update/(:num)', 'FiliereController::update/$1');
$routes->get('/filiere/delete/(:num)', 'FiliereController::delete/$1');

$routes->get('/etudiant', 'EtudiantController::index');
$routes->get('/etudiant/create', 'EtudiantController::create');
$routes->post('/etudiant/store', 'EtudiantController::store');
$routes->get('/etudiant/edit/(:num)', 'EtudiantController::edit/$1');
$routes->post('/etudiant/update/(:num)', 'EtudiantController::update/$1');
$routes->get('/etudiant/delete/(:num)', 'EtudiantController::delete/$1');


// $routes->get('test', 'TestController::index');
// $routes->post('test', 'TestController::store');



