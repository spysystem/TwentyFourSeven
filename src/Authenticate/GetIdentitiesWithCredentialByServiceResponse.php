<?php

namespace TwentyFourSeven\Authenticate;

/**
 * Class GetIdentitiesWithCredentialByServiceResponse
 *
 * @package TwentyFourSeven\Authenticate
 */
class GetIdentitiesWithCredentialByServiceResponse
{

    /**
     * @var ArrayOfIdentity $GetIdentitiesWithCredentialByServiceResult
     */
    protected $GetIdentitiesWithCredentialByServiceResult = null;

    /**
     * @param ArrayOfIdentity $GetIdentitiesWithCredentialByServiceResult
     */
    public function __construct($GetIdentitiesWithCredentialByServiceResult)
    {
      $this->GetIdentitiesWithCredentialByServiceResult = $GetIdentitiesWithCredentialByServiceResult;
    }

    /**
     * @return ArrayOfIdentity
     */
    public function getGetIdentitiesWithCredentialByServiceResult()
    {
      return $this->GetIdentitiesWithCredentialByServiceResult;
    }

    /**
     * @param ArrayOfIdentity $GetIdentitiesWithCredentialByServiceResult
     * @return \TwentyFourSeven\Authenticate\GetIdentitiesWithCredentialByServiceResponse
     */
    public function setGetIdentitiesWithCredentialByServiceResult($GetIdentitiesWithCredentialByServiceResult)
    {
      $this->GetIdentitiesWithCredentialByServiceResult = $GetIdentitiesWithCredentialByServiceResult;
      return $this;
    }

}
