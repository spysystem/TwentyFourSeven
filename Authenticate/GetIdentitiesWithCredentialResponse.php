<?php

namespace TwentyFourSeven\Authenticate;

class GetIdentitiesWithCredentialResponse
{

    /**
     * @var ArrayOfIdentity $GetIdentitiesWithCredentialResult
     */
    protected $GetIdentitiesWithCredentialResult = null;

    /**
     * @param ArrayOfIdentity $GetIdentitiesWithCredentialResult
     */
    public function __construct($GetIdentitiesWithCredentialResult)
    {
      $this->GetIdentitiesWithCredentialResult = $GetIdentitiesWithCredentialResult;
    }

    /**
     * @return ArrayOfIdentity
     */
    public function getGetIdentitiesWithCredentialResult()
    {
      return $this->GetIdentitiesWithCredentialResult;
    }

    /**
     * @param ArrayOfIdentity $GetIdentitiesWithCredentialResult
     * @return \TwentyFourSeven\Authenticate\GetIdentitiesWithCredentialResponse
     */
    public function setGetIdentitiesWithCredentialResult($GetIdentitiesWithCredentialResult)
    {
      $this->GetIdentitiesWithCredentialResult = $GetIdentitiesWithCredentialResult;
      return $this;
    }

}
