<?php
namespace TourismLandingPage;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/router.php';


Route::add('/', function () {
    require __DIR__ . '/views/home.php';
});

Route::add('/admin', function () {
    require __DIR__ . '/views/admin.php';
});

Route::submit();