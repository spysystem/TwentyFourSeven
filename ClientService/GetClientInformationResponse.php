<?php

namespace TwentyFourSeven\ClientService;

class GetClientInformationResponse
{

    /**
     * @var Client $GetClientInformationResult
     */
    protected $GetClientInformationResult = null;

    /**
     * @param Client $GetClientInformationResult
     */
    public function __construct($GetClientInformationResult)
    {
      $this->GetClientInformationResult = $GetClientInformationResult;
    }

    /**
     * @return Client
     */
    public function getGetClientInformationResult()
    {
      return $this->GetClientInformationResult;
    }

    /**
     * @param Client $GetClientInformationResult
     * @return \TwentyFourSeven\ClientService\GetClientInformationResponse
     */
    public function setGetClientInformationResult($GetClientInformationResult)
    {
      $this->GetClientInformationResult = $GetClientInformationResult;
      return $this;
    }

}
