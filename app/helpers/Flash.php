<?php

namespace app\helpers;

class Flash {
  public static function add($index, $message){
    if(!isset($_SESSION[$index])){
      $_SESSION[$index];
    }
  }

  public static function get($index){
    
  }
}