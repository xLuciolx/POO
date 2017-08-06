<?php

class Categorie{

  private $Libelle,
          $Articles = array();

  /**
   * @param string $Libelle
   * @param array $Articles
   */
  public function __construct(
    $Libelle,
    $Articles = null)/*pour eviter une erreur type indefini*/
  {
    $this->Libelle  = $Libelle;
    $this->Articles = $Articles;
  }

  /*Getter*/

  /**
   * @return mixed
   */
  public function getLibelle()
  {
    return $this->Libelle;
  }

  /**
   * @return array
   */
  public function getArticles()
  {
    return $this->Articles;
  }

  /*Setter*/

  /**
   * @param mixed $NewLibelle
   *
   * @return static
   */
  public function setLibelle($NewLibelle)
  {
    $this->Libelle = $NewLibelle;
    return $this;
  }

  /**
   * @param Article $NewArticle
   *
   * @return static
   */
  public function setArticles(Article $NewArticle)
  {
    $this->Articles[] = $NewArticle;
    return $this;
  }

}
