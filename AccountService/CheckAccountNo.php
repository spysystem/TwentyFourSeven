<?php

namespace TwentyFourSeven\AccountService;

class CheckAccountNo
{

    /**
     * @var ArrayOfAccountData $accountList
     */
    protected $accountList = null;

    /**
     * @param ArrayOfAccountData $accountList
     */
    public function __construct($accountList)
    {
      $this->accountList = $accountList;
    }

    /**
     * @return ArrayOfAccountData
     */
    public function getAccountList()
    {
      return $this->accountList;
    }

    /**
     * @param ArrayOfAccountData $accountList
     * @return \TwentyFourSeven\AccountService\CheckAccountNo
     */
    public function setAccountList($accountList)
    {
      $this->accountList = $accountList;
      return $this;
    }

}
