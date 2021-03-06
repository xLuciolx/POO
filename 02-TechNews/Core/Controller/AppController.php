<?php

  namespace Core\Controller;
  use Core\Model\DbFactory;


  class AppController {

    private $_viewparams;

    public function __construct()
    {
      /*Initilisation de ORMFactory*/
      DbFactory::ORMFactory();
    }

  /**
   * Permet de générer l'affichage de la vue passée en parametre
   * @param string $view Vue à afficher
   * @param array $viewparams Données à passer à la vue
   */
    protected function render($view, $viewparams = null) {

      /*Récuperation et affectation des parametres de la vue*/
      $this->_viewparams = $viewparams;

      /*Affichage de l'en-tete*/
      require (HEADER_SITE);

        /*Inclusion de la Vue*/
        include_once VIEW_SITE . '/' . $view . '.php';

      /*Affichage du pied de page*/
      require (FOOTER_SITE);

    }

    public function getParams() {
      return $this->_viewparams;
    }

    /**
     * Fonction permettant le debuggage des parametres de la vue.
     */
    public function debug(){
      echo '<pre>';
      print_r($this->_viewparams);
      echo '</pre>';
    }

    /**
     * Verifie l'existence de valeur dans $_GET['action']
     * @return string action
     */
    public function getAction(){

      if(empty($_GET['action'])){
        return 'accueil';
      }
      return $_GET['action'];
    }
  }
