<?php

namespace TwentyFourSeven\Authenticate;

class HasSessionResponse
{

    /**
     * @var boolean $HasSessionResult
     */
    protected $HasSessionResult = null;

    /**
     * @param boolean $HasSessionResult
     */
    public function __construct($HasSessionResult)
    {
      $this->HasSessionResult = $HasSessionResult;
    }

    /**
     * @return boolean
     */
    public function getHasSessionResult()
    {
      return $this->HasSessionResult;
    }

    /**
     * @param boolean $HasSessionResult
     * @return \TwentyFourSeven\Authenticate\HasSessionResponse
     */
    public function setHasSessionResult($HasSessionResult)
    {
      $this->HasSessionResult = $HasSessionResult;
      return $this;
    }

}
