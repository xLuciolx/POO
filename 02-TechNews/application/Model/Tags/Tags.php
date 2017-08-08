<?php

namespace application\Model\Tags;

class Tags {

  private $IDTAGS,
          $LIBELLETAGS;

  /**
   * @return $IDTAGS
   */
  public function getIDTAGS()
  {
    return $this->IDTAGS;
  }

  /**
   * @return $LIBELLETAGS
   */
  public function getLIBELLETAGS()
  {
    return $this->LIBELLETAGS;
  }
}
