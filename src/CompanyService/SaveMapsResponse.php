<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class SaveMapsResponse
 *
 * @package TwentyFourSeven\CompanyService
 */
class SaveMapsResponse
{

    /**
     * @var ArrayOfCompanyMap $SaveMapsResult
     */
    protected $SaveMapsResult = null;

    /**
     * @param ArrayOfCompanyMap $SaveMapsResult
     */
    public function __construct($SaveMapsResult)
    {
      $this->SaveMapsResult = $SaveMapsResult;
    }

    /**
     * @return ArrayOfCompanyMap
     */
    public function getSaveMapsResult()
    {
      return $this->SaveMapsResult;
    }

    /**
     * @param ArrayOfCompanyMap $SaveMapsResult
     * @return \TwentyFourSeven\CompanyService\SaveMapsResponse
     */
    public function setSaveMapsResult($SaveMapsResult)
    {
      $this->SaveMapsResult = $SaveMapsResult;
      return $this;
    }

}
