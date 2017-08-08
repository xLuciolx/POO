<?php

  /*Affichage des erreurs en mode DEV*/
  ini_set('display_errors', 1);

  /**
   * Racine du site internet
   * Necessite PHP 7+
   * http://php.net/manual/fr/function.dirname.php
   */

  define('ROOT', dirname(__FILE__, 2));

  /*Chemin relatif vers le dossier publique*/
  define('PUBLIC_URL', '/POO/02-TechNews/public');

  /*En-tete du site*/
  define('HEADER_SITE', ROOT.'/application/Layout/header.inc.php');

  /*Footer*/
  define('FOOTER_SITE', ROOT.'/application/Layout/footer.inc.php');

  /*Constante pour les vues*/
  define('VIEW_SITE', ROOT.'/application/Views');

  /*Connexion BDD*/
  define('DBHOST',     'localhost');
  define('DBNAME',     'technews');
  define('DBUSERNAME', 'root');
  define('DBPASSWORD', '');

  /*Autoloader*/
  require_once 'Autoloader.php';
  Autoloader::register();
