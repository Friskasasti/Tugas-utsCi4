<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/dosen', 'Dosen::index');
$routes->get('/dosen/(:num)', 'Dosen::detail/$1');
$routes->post('/dosen/insertData', 'Dosen::insertData');
$routes->post('/dosen/updateData/(:num)', 'Dosen::updateData/$1');
$routes->get('/dosen/deleteData/(:num)', 'Dosen::deleteData/$1');

$routes->get('/staff', 'Staff::index');
$routes->get('/staff/(:num)', 'Staff::detail/$1');
$routes->post('/staff/insertData', 'Staff::insertData');
$routes->post('/staff/updateData/(:num)', 'Staff::updateData/$1');
$routes->get('/staff/deleteData/(:num)', 'Staff::deleteData/$1');
