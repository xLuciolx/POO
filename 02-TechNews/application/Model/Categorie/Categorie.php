<?php

  namespace application\Model\Categorie;

  class Categorie {

      private $IDCATEGORIE,
              $LIBELLECATEGORIE,
              $ROUTECATEGORIE;

      /**
       * @return $IDCATEGORIE
       */
      public function getIDCATEGORIE()
      {
        return $this->IDCATEGORIE;
      }

      /**
       * @return $LIBELLECATEGORIE
       */
      public function getLIBELLECATEGORIE()
      {
        return $this->LIBELLECATEGORIE;
      }

      /**
       * @return $ROUTECATEGORIE
       */
      public function getROUTECATEGORIE()
      {
        return $this->ROUTECATEGORIE;
      }
  }
