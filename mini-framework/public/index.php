<?php
require_once __DIR__.'/../vendor/autoload.php';

use Staditek\App\Controller\HomeController;
use Staditek\App\Core\Router;

Router::addRoute('GET', '/', HomeController::class, 'index', []);
Router::run();

