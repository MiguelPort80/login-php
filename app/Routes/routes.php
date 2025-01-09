<?php
use Slim\App;
use App\Controllers\HomeController;
use App\Controllers\UserController;
use App\Controllers\LoginController;

return function(App $app){
    $app->get('/', [HomeController::class, 'index']);

    $app->get('/home', [HomeController::class, 'index']);

    $app->get('/user/create_form', [UserController::class, 'index']);

    $app->post('/user/create', [UserController::class, 'create']);

    $app->post('/user/login', [LoginController::class, 'login']);

    $app->get('/user/logout', [LoginController::class, 'logout']);

};