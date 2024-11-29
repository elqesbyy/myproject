<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'AuthController::home');
$routes->get('login', 'AuthController::login');
$routes->post('processlogin', 'AuthController::processLogin');
$routes->get('logout', 'AuthController::logout');
$routes->get('myproject/admindashboard', 'Home::index');
$routes->get('myproject/professeurdashboard', 'Home::professeurdashboard');
$routes->get('myproject/etudiantdashboard', 'Home::etudiantdashboard');




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

$routes->get('/matiere', 'MatiereController::index');
$routes->get('/matiere/create', 'MatiereController::create');
$routes->post('/matiere/store', 'MatiereController::store');
$routes->get('/matiere/edit/(:num)', 'MatiereController::edit/$1');
$routes->post('/matiere/update/(:num)', 'MatiereController::update/$1');
$routes->get('/matiere/delete/(:num)', 'MatiereController::delete/$1');

$routes->get('/cour', 'CourController::index');
$routes->get('/cour/create', 'CourController::create');
$routes->post('/cour/store', 'CourController::store');
$routes->get('/cour/edit/(:num)', 'CourController::edit/$1');
$routes->post('/cour/update/(:num)', 'CourController::update/$1');
$routes->get('/cour/delete/(:num)', 'CourController::delete/$1');


$routes->group('professeur', function ($routes) {
    $routes->get('/', 'ProfesseurController::index');
    $routes->get('create', 'ProfesseurController::create');
    $routes->post('store', 'ProfesseurController::store');
    $routes->get('edit/(:num)', 'ProfesseurController::edit/$1');
    $routes->post('update/(:num)', 'ProfesseurController::update/$1');
    $routes->get('delete/(:num)', 'ProfesseurController::delete/$1');
});

// $routes->get('test', 'TestController::index');
// $routes->post('test', 'TestController::store');



