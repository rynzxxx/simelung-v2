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

$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('desa/dashboard', 'DashboardController::desa');
    $routes->get('bumdes/dashboard', 'DashboardController::bumdes');
    $routes->get('keuangan/dashboard', 'DashboardController::keuangan');
    $routes->get('umkm/dashboard', 'DashboardController::umkm');
    $routes->get('broker/dashboard', 'DashboardController::broker');
    $routes->get('pariwisata/dashboard', 'DashboardController::pariwisata');
});
