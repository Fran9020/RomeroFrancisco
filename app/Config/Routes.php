<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('QuienesSomos', 'Home::QuienesSomos');
$routes->get('Comercializacion', 'Home::Comercializacion');
$routes->get('InformacionDeContacto', 'Home::InformacionDeContacto');
$routes->get('TerminosYUsos', 'Home::TerminosYUsos');

