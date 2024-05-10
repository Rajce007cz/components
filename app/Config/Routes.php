<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('typy', 'Main::getType');
$routes->get('component/(:any)', 'Main::getKomponent/$1');
$routes->get('info/(:num)', 'Main::getInfo/$1');
