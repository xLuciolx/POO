<?php

  namespace Core\Controller;

  class AppController {

    private $_viewparams;

  /**
   * Permet de générer l'affichage de la vue passée en parametre
   * @param  string $view Vue à afficher
   * @param array $viewparams Données à passer à la vue
   */
    protected function render($view, $viewparams = null) {

      /*Récuperation et affectation des parametres de la vue*/
      $this->_viewparams = $viewparams;

      /*Affichage de l'en-tete*/
      require (HEADER_SITE);

        /*Inclusion de la Vue*/
        include_once VIEW_SITE . '/' . $view . '.php';

        /*Affichage de la sidebar*/
        require (SIDEBAR_SITE);

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
  }
