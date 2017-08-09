<?php
    /*On récupère les parametres de la Vue*/
    $params = $this->getParams();
 ?>

<div class="col-md-8">
  <div class="page-404">
    <h1>
      404
    </h1>
    <img src="<?= PUBLIC_URL; ?>/images/404_2.jpg" alt="page 404">
    <p>
      Erreur, <?= $params['erreur']; ?>
    </p>
    <a href="<?= PUBLIC_URL; ?>" class="my-btn btn-go-home">Retourner vers  l'Accueil</a>
  </div>
</div>
