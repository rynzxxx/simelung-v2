<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'About::index');

// ... (biarkan kode yang sudah ada di atas)

$routes->get('/', 'AuthController::login'); // Jadikan login sebagai halaman utama
$routes->get('/login', 'AuthController::login');
$routes->post('/login/process', 'AuthController::processLogin');
$routes->get('/logout', 'AuthController::logout');

// Grup rute untuk Super Admin (nanti akan kita proteksi)
//$routes->group('superadmin', function ($routes) {
//    $routes->get('dashboard', 'SuperAdminController::dashboard');
//});

// Grup rute untuk Admin (nanti akan kita proteksi)
//$routes->group('admin', function ($routes) {
//    $routes->get('dashboard', 'AdminController::dashboard');
//});

// ...

// Grup rute untuk Super Admin
$routes->group('superadmin', ['filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'SuperAdminController::dashboard');
});

// Grup rute untuk Admin
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'AdminController::dashboard');
});
