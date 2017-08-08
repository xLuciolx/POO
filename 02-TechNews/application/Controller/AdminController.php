<?php
  namespace application\Controller;

  class AdminController extends \Core\Controller\AppController {
    /**
     * Affichage de la page connexion
     */
    public function connexion() {

      /*rendu de la vue admin/connexion.php*/
      $this->render('admin/connexion');

  }

}
