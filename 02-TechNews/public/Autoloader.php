<?php

  class Autoloader {

    public static function register() {
      spl_autoload_register(array(__CLASS__, 'autoload')); /*parametres : classe(variable magique __CLASS__), fonction à executer*/
    }

    public static function autoload($class) {
      // print_r($class);
      require ROOT . '/' . $class . '.php';
    }

  }
