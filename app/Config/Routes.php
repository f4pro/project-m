<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index');
$routes->get('/keu_k', 'Keuangan::keluar');
$routes->get('/keu_m', 'Keuangan::masuk');
