<?php

namespace TwentyFourSeven\AccountService;

/**
 * Class SaveBundleList
 *
 * @package TwentyFourSeven\AccountService
 */
class SaveBundleList
{

    /**
     * @var BundleList $bundlelist
     */
    protected $bundlelist = null;

    /**
     * @param BundleList $bundlelist
     */
    public function __construct($bundlelist)
    {
      $this->bundlelist = $bundlelist;
    }

    /**
     * @return BundleList
     */
    public function getBundlelist()
    {
      return $this->bundlelist;
    }

    /**
     * @param BundleList $bundlelist
     * @return \TwentyFourSeven\AccountService\SaveBundleList
     */
    public function setBundlelist($bundlelist)
    {
      $this->bundlelist = $bundlelist;
      return $this;
    }

}
