<?php

namespace TwentyFourSeven\AccountService;

class GetTypeListResponse
{

    /**
     * @var ArrayOfTypeData $GetTypeListResult
     */
    protected $GetTypeListResult = null;

    /**
     * @param ArrayOfTypeData $GetTypeListResult
     */
    public function __construct($GetTypeListResult)
    {
      $this->GetTypeListResult = $GetTypeListResult;
    }

    /**
     * @return ArrayOfTypeData
     */
    public function getGetTypeListResult()
    {
      return $this->GetTypeListResult;
    }

    /**
     * @param ArrayOfTypeData $GetTypeListResult
     * @return \TwentyFourSeven\AccountService\GetTypeListResponse
     */
    public function setGetTypeListResult($GetTypeListResult)
    {
      $this->GetTypeListResult = $GetTypeListResult;
      return $this;
    }

}
