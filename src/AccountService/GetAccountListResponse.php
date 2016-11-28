<?php

namespace TwentyFourSeven\AccountService;

class GetAccountListResponse
{

    /**
     * @var ArrayOfAccountData $GetAccountListResult
     */
    protected $GetAccountListResult = null;

    /**
     * @param ArrayOfAccountData $GetAccountListResult
     */
    public function __construct($GetAccountListResult)
    {
      $this->GetAccountListResult = $GetAccountListResult;
    }

    /**
     * @return ArrayOfAccountData
     */
    public function getGetAccountListResult()
    {
      return $this->GetAccountListResult;
    }

    /**
     * @param ArrayOfAccountData $GetAccountListResult
     * @return \TwentyFourSeven\AccountService\GetAccountListResponse
     */
    public function setGetAccountListResult($GetAccountListResult)
    {
      $this->GetAccountListResult = $GetAccountListResult;
      return $this;
    }

}
