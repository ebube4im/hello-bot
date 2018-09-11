<?php


namespace App;

Class Config {

   
  static $facebookCredentials = [

    'verifyToken' => 'example',

    'accessToken' => 'EAAEj212byTgBANiAVHaXYZAxEIUN69usEPLjYBkPwOAy7gmkZBnPXPZCJXbe3taKf8ZAYDZAAPWnl180iUmL0shLKKXm76pzXcYiVBh4l2Ouphj7IWQyOxHwCFsL3fpZB8xi6z45UOlBMfEFcn6zJyVJ8iChYVVnfoPatZCCvI3zl6gGmBo7duJ'

  ];

   
  static function getVerifyToken() {

    return  Config::$facebookCredentials['verifyToken'];

  }

  static function getAccessToken() {

    return  Config::$facebookCredentials['accessToken'];

  }

  

}
