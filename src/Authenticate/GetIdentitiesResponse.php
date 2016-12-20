<?php

namespace TwentyFourSeven\Authenticate;

/**
 * Class GetIdentitiesResponse
 *
 * @package TwentyFourSeven\Authenticate
 */
class GetIdentitiesResponse
{

    /**
     * @var ArrayOfIdentity $GetIdentitiesResult
     */
    protected $GetIdentitiesResult = null;

    /**
     * @param ArrayOfIdentity $GetIdentitiesResult
     */
    public function __construct($GetIdentitiesResult)
    {
      $this->GetIdentitiesResult = $GetIdentitiesResult;
    }

    /**
     * @return ArrayOfIdentity
     */
    public function getGetIdentitiesResult()
    {
      return $this->GetIdentitiesResult;
    }

    /**
     * @param ArrayOfIdentity $GetIdentitiesResult
     * @return \TwentyFourSeven\Authenticate\GetIdentitiesResponse
     */
    public function setGetIdentitiesResult($GetIdentitiesResult)
    {
      $this->GetIdentitiesResult = $GetIdentitiesResult;
      return $this;
    }

}
