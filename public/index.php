<?php


  require '../vendor/autoload.php';
  require 'bootstrap.php';


  use Slim\Factory\AppFactory;
  use Slim\Routing\RouteCollectorProxy;


  $app = AppFactory::create();

  $app->get('/login', 'app\controllers\admin\LoginController:index');
  $app->post('/login', 'app\controllers\admin\LoginController:store');
  

  // painel admin
  // $app->get('/admin/painel', 'app\controllers\admin\DashboardController:index');
  
  
  // $app->group('/admin', function() use($app){
  //   $app->get('/painel', 'app\controllers\admin\DashboardController:index');
  // });

  $app->group('/admin', function (RouteCollectorProxy $group) {
    $group->get('/painel', 'app\controllers\admin\DashboardController:index');
  });

  // Run app
  $app->run();
