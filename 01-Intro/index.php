<?php

  include 'Article.class.php';
  include 'Auteur.class.php';
  include 'Categorie.class.php';
  header('content-type: text/html; charset=utf-8');

  /**
   * Creation d'une instance de la classe Article. La variable $UnArticle est un objet de la classe Article.
   * En ce sens, elle a accès à l'ensemble des propriétés et fonctions qui la composent
   */
  $UnAuteur = new Auteur('GALLAY', 'Loïc', 'lgallay@orange.fr');
  $UnArticle = new Article('La Formation WF3', 'Une formation certifiante en 3 mois !', 'Rejoignez-nous à Limas et vous verrez bien !', 'wf3.jpg', '04/08/2017');
  $UnArticle->setAuteur($UnAuteur);

  /*Afficher un objet*/
  echo '<pre>';
  print_r($UnArticle);
  echo '</pre>';

  /*Erreur*/
  // echo $UnArticle->getTitre;
  // Uncaught Error: Cannot access private property Article::$Titre
  $UnAutreAuteur = new Auteur('LIEGEARD', 'Hugo', 'wf3@hl-media.fr');
  // $UnAutreAuteur->setPrenom('hugo');
  $UnDeuxiemeArticle = new Article('SUPINFO', 'Une Ecole pour les Ingénieurs !', 'Venez nombreux pour prendre le Ti-Punch...', 'ti-punch.jpg', '04/08/2017');
  $UnDeuxiemeArticle->setAuteur($UnAutreAuteur);

  /*Affiche l'objet*/
  echo '<pre>';
  print_r($UnDeuxiemeArticle);
  echo '</pre>';

  $UneCategorie = new Categorie('Formation Informatique');
  $UneCategorie->setArticles($UnArticle);
  $UneCategorie->setArticles($UnDeuxiemeArticle);

  /*Affiche l'objet*/
  echo '<pre>';
  print_r($UneCategorie);
  echo '</pre>';
 ?>

 <!DOCTYPE html>
 <html lang="fr">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Into POO</title>
 </head>
 <body>
    <h1>Article par catégorie:</h1>
    <ol>
      <?= $UneCategorie->getLibelle();?>
      <?php foreach ($UneCategorie->getArticles() as $article): ?>
        <li>
          Titre: <?= $article->getTitre(); ?> - <?= $article->getAuteur()->getNomComplet(); ?>
        </li>
      <?php endforeach; ?>
    </ol>
 </body>
 </html>
