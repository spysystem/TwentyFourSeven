<?php

namespace TwentyFourSeven\AccountService;

/**
 * Class SaveBundleListResponse
 *
 * @package TwentyFourSeven\AccountService
 */
class SaveBundleListResponse
{

    /**
     * @var saveRespons $SaveBundleListResult
     */
    protected $SaveBundleListResult = null;

    /**
     * @param saveRespons $SaveBundleListResult
     */
    public function __construct($SaveBundleListResult)
    {
      $this->SaveBundleListResult = $SaveBundleListResult;
    }

    /**
     * @return saveRespons
     */
    public function getSaveBundleListResult()
    {
      return $this->SaveBundleListResult;
    }

    /**
     * @param saveRespons $SaveBundleListResult
     * @return \TwentyFourSeven\AccountService\SaveBundleListResponse
     */
    public function setSaveBundleListResult($SaveBundleListResult)
    {
      $this->SaveBundleListResult = $SaveBundleListResult;
      return $this;
    }

}
