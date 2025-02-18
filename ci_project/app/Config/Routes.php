<?php

use App\Controllers\Pesanan;
use App\Controllers\Produk;
use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// --- PRODUK ---


//produk list


// $routes->set404Override(static function (){
//     return view('v_custom_error');
// })


$routes->get('/', [Home::class, 'index']);
$routes->get('/dashboard', [Home::class, 'dashboard']);
// $routes->group('produk', function($routes){
//     $routes->match(['GET', 'POST'], '/',[Produk::class, 'feature_create']);
//     //create
//     //$routes->get('produk/add', [Produk::class, 'on_create']);
//     //$routes->post('produk/save_add', [Produk::class, 'create']);

//     //delete
//     $routes->get('delete/(:num)', [Produk::class, 'delete']);

//     //detail
//     $routes->get('detail/(:num)/id/(:num)', [Produk::class, 'detail'], ['as' => 'detail']);

//     //edit
//     $routes->get('edit/(:num)', [Produk::class, 'on_update']);
//     $routes->post('save_update/(:num)', [Produk::class, 'update']);

//     //stok routes
//     $routes->post('kurang/(:num)', [Produk::class, 'kurang_stok']);
//     $routes->post('tambah/(:num)', [Produk::class, 'tambah_stok']); 

//     $routes->get('home', [Home::class, 'index']);
// });

// //resource photos
$routes->resource('photo');


