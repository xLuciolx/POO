<?php
  /*****************************************************************************************************************************
   * Nous sommes ici sur le point d'entrée de notre application.                                                               *
   * En MVC c'est ce que l'on appel: un Controleur Frontal.                                                                    *
   * L'ensemble des actions de notre site internet passera uniquement par ce fichier.                                          *
   * Il a pour mission de transférer au bon controleur la demande de l'utilisateur.                                            *
   *                                                                                                                           *
   * Dans un Framework et en MVC, nous utilisons la puissance de la réécriture des URLs via la création d'un fichier .htaccess *
   *****************************************************************************************************************************/

  use Core\Core;

  /*Initialisation du site*/
  require 'bootstrap.php';
  require (ROOT.'/Core/Core.php');

  $core = new Core($_GET);
