<?php


  require '../vendor/autoload.php';
  require 'bootstrap.php';


  use Slim\Factory\AppFactory;


  $app = AppFactory::create();

  $app->get('/login', 'app\controllers\admin\LoginController:index');
  $app->post('/login', 'app\controllers\admin\LoginController:store');
  

  // painel admin
  $app->get('/admin', 'app\controllers\admin\DashboardController:index');
  
  
  // $app->group('admin', function() use($app){



  // })->add($loggedIn);

  // Run app
  $app->run();
