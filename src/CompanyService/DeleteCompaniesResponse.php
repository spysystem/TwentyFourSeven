<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class DeleteCompaniesResponse
 *
 * @package TwentyFourSeven\CompanyService
 */
class DeleteCompaniesResponse
{

    /**
     * @var ArrayOfCompany $DeleteCompaniesResult
     */
    protected $DeleteCompaniesResult = null;

    /**
     * @param ArrayOfCompany $DeleteCompaniesResult
     */
    public function __construct($DeleteCompaniesResult)
    {
      $this->DeleteCompaniesResult = $DeleteCompaniesResult;
    }

    /**
     * @return ArrayOfCompany
     */
    public function getDeleteCompaniesResult()
    {
      return $this->DeleteCompaniesResult;
    }

    /**
     * @param ArrayOfCompany $DeleteCompaniesResult
     * @return \TwentyFourSeven\CompanyService\DeleteCompaniesResponse
     */
    public function setDeleteCompaniesResult($DeleteCompaniesResult)
    {
      $this->DeleteCompaniesResult = $DeleteCompaniesResult;
      return $this;
    }

}
