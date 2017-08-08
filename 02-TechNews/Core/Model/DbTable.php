<?php

  namespace Core\Model;

  abstract class DbTable {

    /*Nom de la table*/
    protected $_table;

    /*clé primaire*/
    protected $_primary;

    /*classe à Mapper*/
    protected $_classToMap;

    /*Objet PDO, BDD*/
    private $_db;

    /**
     * Constructeur
     */
    public function __construct()
    {
      $this->_db = DbFactory::PDOFactory();
    }

    /**
     * Fonction qui sera chargée de récupérer toutes les infos d'une table dans la BDD
     */
    public function fetchAll(){

      $sql = "SELECT * FROM " . $this->_table;
      $sth = $this->_db->prepare($sql);
      $sth->execute();
      return $sth->fetchAll(\PDO::FETCH_CLASS, $this->_classToMap);
    }

  }
