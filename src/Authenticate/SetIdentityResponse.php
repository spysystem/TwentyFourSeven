<?php

namespace TwentyFourSeven\Authenticate;

/**
 * Class SetIdentityResponse
 *
 * @package TwentyFourSeven\Authenticate
 */
class SetIdentityResponse
{

    /**
     * @var boolean $SetIdentityResult
     */
    protected $SetIdentityResult = null;

    /**
     * @param boolean $SetIdentityResult
     */
    public function __construct($SetIdentityResult)
    {
      $this->SetIdentityResult = $SetIdentityResult;
    }

    /**
     * @return boolean
     */
    public function getSetIdentityResult()
    {
      return $this->SetIdentityResult;
    }

    /**
     * @param boolean $SetIdentityResult
     * @return \TwentyFourSeven\Authenticate\SetIdentityResponse
     */
    public function setSetIdentityResult($SetIdentityResult)
    {
      $this->SetIdentityResult = $SetIdentityResult;
      return $this;
    }

}
