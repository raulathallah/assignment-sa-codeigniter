<?php

use App\Controllers\Article;
use App\Controllers\Home;
use App\Controllers\Mahasiswa;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


 $routes->get('/', [Home::class, 'index']);
 $routes->group('article', function($routes){
  $routes->get('', [Article::class, 'index'], ['as' => 'article_list']);
  $routes->get('new', [Article::class, 'new']);
  $routes->get('edit/(:num)/title/(:segment)', [Article::class, 'edit'], ['as' => 'article_edit']);
  $routes->post('create', [Article::class, 'create']);
  $routes->post('update/(:segment)', [Article::class, 'update']);
  $routes->get('detail/(:num)/title/(:segment)', [Article::class, 'show'], ['as' => 'article_detail']);
  $routes->get('delete/(:segment)', [Article::class, 'delete']);
});

 //$routes->resource('article');
 
/*

$routes->get('/', [Mahasiswa::class, 'index']);
$routes->get('mahasiswa/detail/(:any)', [Mahasiswa::class, 'detail']);

$routes->get('mahasiswa/create', [Mahasiswa::class, 'create']);
$routes->get('mahasiswa/edit/(:num)', [Mahasiswa::class, 'update']);

$routes->post('mahasiswa/save_add', [Mahasiswa::class, 'save_add']);
$routes->post('mahasiswa/save_update', [Mahasiswa::class, 'save_update']);
$routes->get('mahasiswa/delete/(:any)', [Mahasiswa::class, 'delete']);



*/





