<?php

namespace TwentyFourSeven\ClientService;

class GetVatTypeListResponse
{

    /**
     * @var ArrayOfVatType $GetVatTypeListResult
     */
    protected $GetVatTypeListResult = null;

    /**
     * @param ArrayOfVatType $GetVatTypeListResult
     */
    public function __construct($GetVatTypeListResult)
    {
      $this->GetVatTypeListResult = $GetVatTypeListResult;
    }

    /**
     * @return ArrayOfVatType
     */
    public function getGetVatTypeListResult()
    {
      return $this->GetVatTypeListResult;
    }

    /**
     * @param ArrayOfVatType $GetVatTypeListResult
     * @return \TwentyFourSeven\ClientService\GetVatTypeListResponse
     */
    public function setGetVatTypeListResult($GetVatTypeListResult)
    {
      $this->GetVatTypeListResult = $GetVatTypeListResult;
      return $this;
    }

}
