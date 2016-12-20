<?php

namespace TwentyFourSeven\Authenticate;

/**
 * Class SetIdentityByIdResponse
 *
 * @package TwentyFourSeven\Authenticate
 */
class SetIdentityByIdResponse
{

    /**
     * @var boolean $SetIdentityByIdResult
     */
    protected $SetIdentityByIdResult = null;

    /**
     * @param boolean $SetIdentityByIdResult
     */
    public function __construct($SetIdentityByIdResult)
    {
      $this->SetIdentityByIdResult = $SetIdentityByIdResult;
    }

    /**
     * @return boolean
     */
    public function getSetIdentityByIdResult()
    {
      return $this->SetIdentityByIdResult;
    }

    /**
     * @param boolean $SetIdentityByIdResult
     * @return \TwentyFourSeven\Authenticate\SetIdentityByIdResponse
     */
    public function setSetIdentityByIdResult($SetIdentityByIdResult)
    {
      $this->SetIdentityByIdResult = $SetIdentityByIdResult;
      return $this;
    }

}
