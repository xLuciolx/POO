<?php

namespace Core\Model;

  class DbFactory {

    /**
     * Initialisation de la connexion PDO
     * @return \PDO
     */
    public static function PDOFactory() {

      /*Creation d'une connexion PDO*/
      $pdo = new \PDO('mysql:host=' . DBHOST . ';dbname=' . DBNAME, DBUSERNAME, DBPASSWORD);

      /*gestion des erreurs: http://php.net/manual/fr/pdo.error-handling.php*/
      $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

      /*on retourne pdo*/
      return $pdo;
    }

  }
