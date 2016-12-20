<?php

namespace TwentyFourSeven\Authenticate;

/**
 * Class GetIdentityResponse
 *
 * @package TwentyFourSeven\Authenticate
 */
class GetIdentityResponse
{

    /**
     * @var Identity $GetIdentityResult
     */
    protected $GetIdentityResult = null;

    /**
     * @param Identity $GetIdentityResult
     */
    public function __construct($GetIdentityResult)
    {
      $this->GetIdentityResult = $GetIdentityResult;
    }

    /**
     * @return Identity
     */
    public function getGetIdentityResult()
    {
      return $this->GetIdentityResult;
    }

    /**
     * @param Identity $GetIdentityResult
     * @return \TwentyFourSeven\Authenticate\GetIdentityResponse
     */
    public function setGetIdentityResult($GetIdentityResult)
    {
      $this->GetIdentityResult = $GetIdentityResult;
      return $this;
    }

}
