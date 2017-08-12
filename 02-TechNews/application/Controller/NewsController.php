<?php
  namespace application\Controller;
  use application\Model\Article\ArticleDb;
  use Core\Model\ORM;

  class NewsController extends \Core\Controller\AppController {

    public function index() {

      $ArticleDb   = new ArticleDb();
      $articles    = $ArticleDb->fetchAll();

      $where       = 'SPOTLIGHTARTICLE = 1';
      $spotlights  = $ArticleDb->fetchAll(['where' => $where]);

      $this->render('news/index', ['articles' => $articles,
                                   'spotlights' => $spotlights
                                   ]);
    }

    public function business() {

      /*connexion BDD*/
      $ArticleDb = new ArticleDb();

      /*recuperation des articles*/
      $articles = $ArticleDb->fetchAll(['where' => 'IDCATEGORIE = 2']);

      $this->render('news/categorie', ['articles' => $articles]);

    }

    public function tech() {

      /*connexion BDD*/
      $ArticleDb = new ArticleDb();

      /*recuperation des articles*/
      $articles = $ArticleDb->fetchAll(['where' => 'IDCATEGORIE = 4']);

      $this->render('news/categorie', ['articles' => $articles]);

    }

    public function computing() {

      /*connexion BDD*/
      $ArticleDb = new ArticleDb();

      /*recuperation des articles*/
      $articles = $ArticleDb->fetchAll(['where' => 'IDCATEGORIE = 3']);

      $this->render('news/categorie', ['articles' => $articles]);

    }


    public function article() {

      /*Récupération de l'article*/
      // $article = ORM::for_table('article')->find_one($_GET['idarticle']);

      $article     =ORM::for_table('article')
                    ->join('auteur', array('article.IDAUTEUR', '=', 'auteur.IDAUTEUR'))
                    ->find_one($_GET['idarticle']);

      $suggestions = ORM::for_table('view_articles')
                    ->where('IDCATEGORIE', $article->IDCATEGORIE)
                    ->where_not_equal('IDARTICLE', $article->IDARTICLE)
                    ->limit(3)
                    ->order_by_desc('IDARTICLE')
                    ->find_result_set();

      $this->render('news/article', ['article' => $article, 'suggestions' => $suggestions]);

    }

    public function auteur() {
      $this->render('news/auteur');
    }

    /*Test fonctionnement idiorm*/
    public function  idiorm(){

        $categories  = ORM::for_table('categorie')->find_result_set();
        $auteurs     = ORM::for_table('auteur')->find_result_set();

        $this->render('news/idiorm', ['auteurs' => $auteurs]);
    }

  }
