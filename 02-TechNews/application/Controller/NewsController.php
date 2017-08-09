<?php
  namespace application\Controller;
  use application\Model\Article\ArticleDb;
  // use application\Model\Categorie\CategorieDb;

  class NewsController extends \Core\Controller\AppController {

    public function index() {

      $ArticleDb   = new ArticleDb();
      $articles    = $ArticleDb->fetchAll();

      $where       = 'SPOTLIGHTARTICLE = 1';
      $spotlights  = $ArticleDb->fetchAll(['where' => $where]);

      $where2      = 'SPECIALARTICLE = 1';
      $specials    = $ArticleDb->fetchAll(['where' => $where2]);

      $orderBy     = 'DATECREATIONARTICLE DESC';
      $limit       = '5';
      $lasts       = $ArticleDb->fetchAll(['orderBy' => $orderBy, 'limit' => $limit]);

      $this->render('news/index', ['articles' => $articles,
                                   'spotlights' => $spotlights,
                                   'specials' => $specials,
                                   'lasts' => $lasts]);
    }

    public function categorie() {

      /*connexion BDD*/


      /*récuperation des categories*/
      // $categories = $CategorieDb->fetchAll();

      /*Affichage de la vue*/
      $this->render('news/categorie');

    }

    public function article() {
      $this->render('news/article');

    }

  }
