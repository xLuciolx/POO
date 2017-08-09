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
     * @method fetchAll
     * @param  string $param  parametre pour requete
     * @return array
     */
    public function fetchAll($param = null){

      $sql = "SELECT * FROM " . $this->_table . ' ' . $param;
      $sth = $this->_db->prepare($sql);
      $sth->execute();
      return $sth->fetchAll(\PDO::FETCH_CLASS, $this->_classToMap);
    }

    /**
     * Récupère un enregistrement dans la BDD pour l'ID et la colonne passée en parametres
     * @param int $id ID de l'élément à recupérer dans la BDD
     * @param string $column si différent de la clé primaire
     * @return  DbTable de la classe à mapper
     */
    public function fetchOne($id, $column = ''){
      if($column == ''){
        $column = $this->_primary;
      }

      $sth = $this->_db->prepare('SELECT * FROM '.$this->_table.' WHERE '.$column.'=:id');
      $sth->bindValue(':id', (int) $id, \PDO::PARAM_INT);
      $sth->execute();

      $sth->setFetchMode(\PDO::FETCH_CLASS, $this->_classToMap);
      return $sth->fetch();

    }

//     public function fetchAll($params = '') { // $where = ''; $sql = "SELECT * FROM ".$this->_table;
// if(isset($params['where'])) $sql .= ' WHERE '.$params['where']; if(isset($params['$orderBy'])) $sql .= ' ORDER BY '.$params['$orderBy']; if(isset($params['$limit'])) $sql .= ' LIMIT '.$params['$limit']; $sth = $this->_db->prepare($sql); $sth->execute(); return $sql;

  }
