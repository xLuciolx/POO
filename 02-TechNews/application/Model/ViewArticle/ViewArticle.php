<?php

namespace application\Model\ViewArticle;

class ViewArticle {
  
    private $LIBELLECATEGORIE,
            $TITREARTICLE,
            $CONTENUARTICLE,
            $FEATUREDIMAGEARTICLE,
            $DATECREATIONARTICLE,
            $NOMAUTEUR,
            $PRENOMAUTEUR,
            $EMAILAUTEUR;

    /**
     * @return $LIBELLECATEGORIE
     */
    public function getLIBELLECATEGORIE()
    {
      return $this->LIBELLECATEGORIE;
    }

    /**
     * @return $TITREARTICLE
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
     * @return $DATECREATIONARTICLE,
     */
    public function getDATECREATIONARTICLE()
    {
      return $this->DATECREATIONARTICLE;
    }

    /**
     * @return $NOMAUTEUR,
     */
    public function getNOMAUTEUR()
    {
      return $this->NOMAUTEUR;
    }

    /**
     * @return $PRENOMAUTEUR,
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
     * Renvoi le nom complet de l'auteur
     */
    public function getNomComplet()
    {
      return $this->PRENOMAUTEUR . ' ' . $this->NOMAUTEUR;
    }
}
