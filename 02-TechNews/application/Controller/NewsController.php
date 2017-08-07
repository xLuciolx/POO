<?php
  namespace application\Controller;

  class NewsController extends \Core\Controller\AppController {

    public function index() {
      $this->render('news/index', ['titre' => 'WebForce3', 'Accroche' => 'Partez touis !']);
    }

    public function categorie() {
      echo '<h1>Je suis la page Categorie</h1>';
    }

    public function article() {
      echo '<h1>Je suis la page Article</h1>';
    }
  }
