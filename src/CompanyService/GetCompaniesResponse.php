<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class GetCompaniesResponse
 *
 * @package TwentyFourSeven\CompanyService
 */
class GetCompaniesResponse
{

    /**
     * @var ArrayOfCompany $GetCompaniesResult
     */
    protected $GetCompaniesResult = null;

    /**
     * @param ArrayOfCompany $GetCompaniesResult
     */
    public function __construct($GetCompaniesResult)
    {
      $this->GetCompaniesResult = $GetCompaniesResult;
    }

    /**
     * @return ArrayOfCompany
     */
    public function getGetCompaniesResult()
    {
      return $this->GetCompaniesResult;
    }

    /**
     * @param ArrayOfCompany $GetCompaniesResult
     * @return \TwentyFourSeven\CompanyService\GetCompaniesResponse
     */
    public function setGetCompaniesResult($GetCompaniesResult)
    {
      $this->GetCompaniesResult = $GetCompaniesResult;
      return $this;
    }

}
