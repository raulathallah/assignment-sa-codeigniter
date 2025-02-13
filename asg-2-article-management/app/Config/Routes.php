<?php

use App\Controllers\Articles;
use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', [Home::class, 'index']);

/*
$routes->resource('article', [
  'except' => 'new,edit'
]);
*/

$routes->group('articles', function($routes){
  $routes->get('', [Articles::class, 'getIndex'], ['as' => 'article_list']);
  $routes->get('new', [Articles::class, 'getNew']);
  $routes->get('edit/(:num)/(:segment)', [Articles::class, 'getEdit'], ['as' => 'article_edit']);
  $routes->post('create', [Articles::class, 'postCreate']);
  $routes->put('update/(:segment)', [Articles::class, 'putUpdate']);
  $routes->get('show/(:num)/(:segment)', [Articles::class, 'getShow'], ['as' => 'article_detail']);
  $routes->delete('remove/(:segment)', [Articles::class, 'deleteRemove']);
});


