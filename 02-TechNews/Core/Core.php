<?php

  namespace Core;

  class Core {

    public function __construct($params) /*parametre de la route*/
    {
      /*print_r($params);*/
      if(empty($params)){
        $params['controller'] = 'news';
        $params['action']     = 'index';
      }

      /*recuperation des parametres*/
      $controller = 'application\Controller\\' . ucfirst($params['controller']) . 'Controller';
      $action     = $params['action'];

      /*On verifie si le fichier du controleur existe avant de l'instancier*/
      if (file_exists(ROOT . '\\' . $controller . '.php')) {

        $obj = new $controller;

        if(method_exists($obj, $action)){ /*si la méthode existe dans mon controleur alors je l'execute*/
          /*execution de l'action*/
          $obj->$action();
        }

        else {
          echo '<h1>404 - Page introuvable</h1><h3>Cette vue n\'existe pas</h3>';
        }

      }

      else{
        echo '<h1>404 - Page introuvable</h1><h3>Ce controleur n\'existe pas</h3>';
      }

      // if ($controller == 'news' && $action == 'index') {
      //   echo '<h1>ACCUEIL !</h1>';
      // }
    }


  }
