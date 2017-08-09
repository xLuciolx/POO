<?php
  namespace application\Controller;
  use application\Model\Article\ArticleDb;
  // use application\Model\Categorie\CategorieDb;

  class NewsController extends \Core\Controller\AppController {

    public function index() {

      $ArticleDb   = new ArticleDb();
      $articles    = $ArticleDb->fetchAll();
      $spotlights  = $ArticleDb->fetchAll('WHERE SPOTLIGHTARTICLE = 1');
      $specials    = $ArticleDb->fetchAll('WHERE SPECIALARTICLE = 1');
      $lasts       = $ArticleDb->fetchAll('ORDER BY DATECREATIONARTICLE DESC LIMIT 5');

      $this->render('news/index', ['articles' => $articles, 'spotlights' => $spotlights, 'specials' => $specials, 'lasts' => $lasts]);
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
