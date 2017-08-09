<?php

namespace application\Model\Article;
use application\Model\Auteur\AuteurDb;
use application\Model\Categorie\CategorieDb;

class Article {

  private $IDARTICLE,
          $IDAUTEUR,
          $IDCATEGORIE,
          $TITREARTICLE,
          $CONTENUARTICLE,
          $FEATUREDIMAGEARTICLE,
          $SPECIALARTICLE,
          $SPOTLIGHTARTICLE,
          $DATECREATIONARTICLE,
          $CategorieObj,
          $AuteurObj;




  public function __construct()
  {
    #L'appel au constructeur se fait automatiquement par la classe PDO
    #A chaque construction nous allons récuperer des infos.
    $CategorieDb = new CategorieDb();
    $this->CategorieObj = $CategorieDb->fetchOne($this->IDCATEGORIE);

    $AuteurDb = new AuteurDb();
    $this->AuteurObj = $AuteurDb->fetchOne($this->IDAUTEUR);

  }

  /**
   * @return $IDARTICLE
   */
  public function getIDARTICLE()
  {
    return $this->IDARTICLE;
  }

  /**
   * @return $IDAUTEUR
   */
  public function getIDAUTEUR()
  {
    return $this->IDAUTEUR;
  }

  /**
   * @return $IDCATEGORIE
   */
  public function getIDCATEGORIE()
  {
    return $this->IDCATEGORIE;
  }

  /**
   * @return $TITRECATEGORIE
   */
  public function getTITREARTICLE()
  {
    return $this->TITREARTICLE;
  }

  /**
   * @return $CONTENUARTICLE
   */
  public function getCONTENUARTICLE()
  {
    return $this->CONTENUARTICLE;
  }

  /**
   * @return $FEATUREDIMAGEARTICLE
   */
  public function getFEATUREDIMAGEARTICLE()
  {
    return $this->FEATUREDIMAGEARTICLE;
  }

  /**
   * @return ^$SPECIALARTICLE
   */
  public function getSPECIALARTICLE()
  {
    return $this->SPECIALARTICLE;
  }

  /**
   * @return $SPOTLIGHTARTICLE
   */
  public function getSPOTLIGHTARTICLE()
  {
    return $this->SPOTLIGHTARTICLE;
  }

  /**
   * @return $DATECREATIONARTICLE
   */
  public function getDATECREATIONARTICLE()
  {
    return $this->DATECREATIONARTICLE;
  }

  /**
   * @return $CategorieObj
   */
  public function getCategorieObj()
  {
    return $this->CategorieObj;
  }

  /**
   * @return $AuteurObj
   */
  public function getAuteurObj()
  {
    return $this->AuteurObj;
  }

  /**
   * Retourne une accroche de 170 caracteres
   * @return string retourne une acroche de l'article
   */
  public function getAccroche(){
    /*supprimer toutes les balises*/
    $string = strip_tags($this->getCONTENUARTICLE());

    /*Si la chaine est superieure à 170, je continue*/
    if (strlen($string) > 170) {
      /*coupe à 170*/
      $stringCut = substr($string, 0, 170);

      /*on ecite de couper un mot*/
      $string = substr($stringCut, 0, strrpos($stringCut, ' ')) . '...';
    }

    return $string;
  }
}
