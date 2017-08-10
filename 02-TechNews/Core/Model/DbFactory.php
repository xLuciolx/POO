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

    public static function ORMFactory(){
      /*Initialisation idiorm*/
      ORM::configure('mysql:host=' . DBHOST . ';dbname=' . DBNAME);
      ORM::configure('username', DBUSERNAME);
      ORM::configure('password', DBPASSWORD);

      /*configuration de chaque table (uniquement si clé primaire differente de id)*/
      ORM::configure('id_column_overrides', array(
        'article'       => 'IDARTICLE',
        'view_articles' => 'IDARTICLE'
      ));
    }


  }
