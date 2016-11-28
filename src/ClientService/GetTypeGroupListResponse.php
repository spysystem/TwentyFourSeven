<?php

namespace TwentyFourSeven\ClientService;

class GetTypeGroupListResponse
{

    /**
     * @var ArrayOfAccountingGroup $GetTypeGroupListResult
     */
    protected $GetTypeGroupListResult = null;

    /**
     * @param ArrayOfAccountingGroup $GetTypeGroupListResult
     */
    public function __construct($GetTypeGroupListResult)
    {
      $this->GetTypeGroupListResult = $GetTypeGroupListResult;
    }

    /**
     * @return ArrayOfAccountingGroup
     */
    public function getGetTypeGroupListResult()
    {
      return $this->GetTypeGroupListResult;
    }

    /**
     * @param ArrayOfAccountingGroup $GetTypeGroupListResult
     * @return \TwentyFourSeven\ClientService\GetTypeGroupListResponse
     */
    public function setGetTypeGroupListResult($GetTypeGroupListResult)
    {
      $this->GetTypeGroupListResult = $GetTypeGroupListResult;
      return $this;
    }

}
