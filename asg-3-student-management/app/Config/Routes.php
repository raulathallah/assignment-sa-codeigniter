<?php

use App\Controllers\Mahasiswa;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Mahasiswa::class, 'index']);
$routes->get('mahasiswa/detail/(:any)', [Mahasiswa::class, 'detail']);

$routes->get('mahasiswa/create', [Mahasiswa::class, 'create']);
$routes->get('mahasiswa/edit/(:num)', [Mahasiswa::class, 'update']);

$routes->post('mahasiswa/save_add', [Mahasiswa::class, 'save_add']);
$routes->post('mahasiswa/save_update', [Mahasiswa::class, 'save_update']);
$routes->get('mahasiswa/delete/(:any)', [Mahasiswa::class, 'delete']);
