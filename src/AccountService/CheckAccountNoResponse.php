<?php

namespace TwentyFourSeven\AccountService;

/**
 * Class CheckAccountNoResponse
 *
 * @package TwentyFourSeven\AccountService
 */
class CheckAccountNoResponse
{

    /**
     * @var ArrayOfAccountDataErrors $CheckAccountNoResult
     */
    protected $CheckAccountNoResult = null;

    /**
     * @param ArrayOfAccountDataErrors $CheckAccountNoResult
     */
    public function __construct($CheckAccountNoResult)
    {
      $this->CheckAccountNoResult = $CheckAccountNoResult;
    }

    /**
     * @return ArrayOfAccountDataErrors
     */
    public function getCheckAccountNoResult()
    {
      return $this->CheckAccountNoResult;
    }

    /**
     * @param ArrayOfAccountDataErrors $CheckAccountNoResult
     * @return \TwentyFourSeven\AccountService\CheckAccountNoResponse
     */
    public function setCheckAccountNoResult($CheckAccountNoResult)
    {
      $this->CheckAccountNoResult = $CheckAccountNoResult;
      return $this;
    }

}
