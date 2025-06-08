<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('QuienesSomos', 'Home::QuienesSomos');
$routes->get('Comercializacion', 'Home::Comercializacion');
$routes->get('InformacionDeContacto', 'Home::InformacionDeContacto');
$routes->post('InformacionDeContacto/send', 'Contacto::send');
$routes->get('TerminosYUsos', 'Home::TerminosYUsos');

$routes->get('ingresar', 'FormularioIngreso::index');
$routes->post('ingresar/send', 'FormularioIngreso::send');

$routes->get('registrar', 'Registro::index');
$routes->post('registrar/save', 'Registro::save');

$routes->get('anadir_admin', 'AnadirAdmin::index');
$routes->post('anadir_admin/enviar', 'AnadirAdmin::enviar');

$routes->get('ver_usuarios', 'VerUsuarios::index');

$routes->get('admin_dashboard', 'AdminDashboard::index');

$routes->get('cerrar_sesion', 'CerrarSesion::index');

$routes->get('editar_perfil', 'PerfilController::index');

$routes->get('administrar_usuarios', 'AdministrarUsuariosController::index');
$routes->get('facturas_cliente', 'FacturasController::index');