<?php
  namespace application\Controller;
  // use application\Model\Categorie\CategorieDb;

  class NewsController extends \Core\Controller\AppController {

    public function index() {
      $this->render('news/index');
    }

    public function categorie() {

      /*connexion BDD*/
      // $CategorieDb  = new CategorieDb();

      /*récuperation des categories*/
      // $categories = $CategorieDb->fetchAll();

      /*Affichage de la vue*/
      $this->render('news/categorie');

    }

    public function article() {
      $this->render('news/article');

    }

  }
