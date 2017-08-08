<?php

  namespace application\Model\ViewArticle;
  use Core\Model\DbTable;

  class ViewArticleDB extends DbTable{

    protected $_table = 'view_articles';
    protected $_primary = 'IDARTICLE';
    protected $_classToMap = __NAMESPACE__ . '\\ViewArticle';
  }
