<?php


  require '../vendor/autoload.php';
  require 'bootstrap.php';


  use Slim\Factory\AppFactory;


  $app = AppFactory::create();

 

  // Run app
  $app->run();
