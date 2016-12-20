<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class SaveCompaniesResponse
 *
 * @package TwentyFourSeven\CompanyService
 */
class SaveCompaniesResponse
{

    /**
     * @var ArrayOfCompany $SaveCompaniesResult
     */
    protected $SaveCompaniesResult = null;

    /**
     * @param ArrayOfCompany $SaveCompaniesResult
     */
    public function __construct($SaveCompaniesResult)
    {
      $this->SaveCompaniesResult = $SaveCompaniesResult;
    }

    /**
     * @return ArrayOfCompany
     */
    public function getSaveCompaniesResult()
    {
      return $this->SaveCompaniesResult;
    }

    /**
     * @param ArrayOfCompany $SaveCompaniesResult
     * @return \TwentyFourSeven\CompanyService\SaveCompaniesResponse
     */
    public function setSaveCompaniesResult($SaveCompaniesResult)
    {
      $this->SaveCompaniesResult = $SaveCompaniesResult;
      return $this;
    }

}
