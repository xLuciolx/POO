<?php

namespace application\Model\Auteur;

class Auteur {

  private $IDAUTEUR,
          $NOMAUTEUR,
          $PRENOMAUTEUR,
          $EMAILAUTEUR;

  /**
   * @return $IDAUTEUR
   */
  public function getIDAUTEUR()
  {
    return $this->IDAUTEUR;
  }

  /**
   * @return $NOMAUTEUR
   */
  public function getNOMAUTEUR()
  {
    return $this->NOMAUTEUR;
  }

  /**
   * @return $PRENOMAUTEUR
   */
  public function getPRENOMAUTEUR()
  {
    return $this->PRENOMAUTEUR;
  }

  /**
   * @return $EMAILAUTEUR
   */
  public function getEMAILAUTEUR()
  {
    return $this->EMAILAUTEUR;
  }
/**
 * @return string NOMCOMPLET
 */
  public function getNOMCOMPLET(){
    return $this->PRENOMAUTEUR . ' ' . $this->NOMAUTEUR;
  }

function makeAuteurURL(){
  return PUBLIC_URL . '/auteur/' . $this->IDAUTEUR . '-' . $this->PRENOMAUTEUR . '-' . $this->NOMAUTEUR . '.html';
}

}
