<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
require __DIR__.'/../vendor/autoload.php';

session_start();


$app = AppFactory::create();

$routes = require __DIR__ . '/../app/Routes/routes.php';

$routes($app);

$app->run();