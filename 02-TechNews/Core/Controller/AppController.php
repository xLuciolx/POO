<?php

  namespace Core\Controller;

  class AppController {

    private $_viewparams;

  /**
   * Permet de générer l'affichage de la vue passée en parametre
   * @param  String $view Vue à afficher
   * @param Array $viewparams Données à passer à la vue
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
  }
