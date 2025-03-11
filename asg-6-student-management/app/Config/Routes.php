<?php

use App\Controllers\Academic;
use App\Controllers\Home;
use App\Controllers\Mahasiswa;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);

$routes->get('academic-statistic', [Academic::class, 'getAcademicStatistic']);

$routes->group('', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('register', 'Auth::register', ['as' => 'register']);
    $routes->post('register', 'Auth::attemptRegister');

    $routes->get('login', 'Auth::login', ['as' => 'login']);
    $routes->post('login', 'Auth::attemptLogin');
});

$routes->group('', ['filter' => 'role:student'], function ($routes) {
    $routes->get('my-profile', [Mahasiswa::class, 'detailProfile']);
});

$routes->group('', ['filter' => 'role:admin'], function ($routes) {
    $routes->get('student', [Mahasiswa::class, 'index']);
    $routes->get('student/detail/(:any)', [Mahasiswa::class, 'detail']);
    $routes->get('student/create', [Mahasiswa::class, 'create']);
    $routes->get('student/edit/(:num)', [Mahasiswa::class, 'update']);
    $routes->post('student/save_add', [Mahasiswa::class, 'save_add']);
    $routes->post('student/save_update', [Mahasiswa::class, 'save_update']);
    $routes->get('student/delete/(:any)', [Mahasiswa::class, 'delete']);
});

$routes->group('', ['filter' => 'role:lecturer'], function ($routes) {
    $routes->get('course', [Academic::class, 'index']);
    $routes->get('course/detail/(:any)', [Academic::class, 'getCourseDetail']);
    $routes->get('course/create', [Academic::class, 'createCourse']);
    $routes->get('course/edit/(:num)', [Academic::class, 'updateCourse']);
    $routes->post('course/save_add', [Academic::class, 'course_save_add']);
    $routes->post('course/save_update', [Academic::class, 'course_save_update']);
    $routes->get('course/delete/(:any)', [Academic::class, 'deleteCourse']);
});
