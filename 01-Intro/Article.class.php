<?php

/**
 * Creation d'une classe Article.
 * Une classe est une entité regroupnat des variables/propriétés et des fonctions
 * Par convention UpperCamelCase
 */
class Article
{
  /*Déclaration des propriétés de la classe Article*/

  private $Titre,
          $Accroche,
          $Description,
          $FeaturedImage,
          $DateCreation,
          $Auteur;
  /**
   * @param mixed $Titre
   * @param mixed $Accroche
   * @param mixed $Description
   * @param mixed $FeaturedImage
   * @param mixed $DateCreation
   */
  public function __construct(
    $Titre,
    $Accroche,
    $Description,
    $FeaturedImage,
    $DateCreation)
   {
    /**
     * Attribution à chaque propriétés de notre classe de la valeur donnée au constructeur
     */
    $this->Titre         = $Titre;
    $this->Accroche      = $Accroche;
    $this->Description   = $Description;
    $this->FeaturedImage = $FeaturedImage;
    $this->DateCreation  = $DateCreation;
  }/*fin constructeur*/

  /* Getter: fonction qui renvoit les infos de la classe, une fonction par proprétés*/

  public function getTitre()
  {
    return $this->Titre;
  }

  public function getAccroche()
  {
    return $this->Accroche;
  }

  public function getDescription()
  {
    return $this->Description;
  }

  public function getFeaturedImage()
  {
    return $this->FeaturedImage;
  }

  public function getDateCreation()
  {
    return $this->DateCreation;
  }

  public function getAuteur()
  {
    return $this->Auteur;
  }

  /*Setter: fonction qui permet de modifier les propriétés de notre classe*/

  public function setTitre($NewTitre)
  {
    $this->Titre = $Titre;
  }

  public function setAccroche($NewAccroche)
  {
    $this->Accroche = $Accroche;
  }

  public function setDescription($NewDescription)
  {
    $this->Description = $Description;
  }

  public function setFeaturedImage($NewFeaturedImage)
  {
    $this->FeaturedImage = $FeaturedImage;
  }

  public function setDateCreation($NewDateCreation)
  {
    $this->DateCreation = $DateCreation;
  }

  public function setAuteur($Auteur)
  {
    $this->Auteur = $Auteur;
  }

}/*fin classe*/
