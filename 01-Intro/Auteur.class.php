<?php

class Auteur{

  private $Nom,
          $Prenom,
          $Email;

  /**
   * @param string $Nom
   * @param string $Prenom
   * @param string $Email
   */
  public function __construct(
    $Nom,
    $Prenom,
    $Email)
  {
    $this->Nom    = $Nom;
    $this->Prenom = $Prenom;
    $this->Email  = $Email;
  }

  /*Getter*/

  /**
   * @return string
   */
  public function getNom()
  {
    return $this->Nom;
  }

  /**
   * @return string
   */
  public function getPrenom()
  {
    return $this->Prenom;
  }

  /**
   * @return string
   */
  public function getEmail()
  {
    return $this->Email;
  }

  /*Setter*/

  /**
   * @param string $NewNom
   *
   * @return static
   */
  public function setNom($NewNom)
  {
    $this->Nom = $NewNom;
    return $this;
  }

  /**
   * @param string $NewPrenom
   *
   * @return static
   */
  public function setPrenom($NewPrenom)
  {
    $this->Prenom = $NewPrenom;
    return $this;
  }

  /**
   * @param string $NewEmail
   *
   * @return static
   */
  public function setEmail($NewEmail)
  {
    $this->Email = $NewEmail;
    return $this;
  }

  /*Method*/

  public function getNomComplet()
  {
    return $this->Prenom . ' ' . $this->Nom;
  }

}
