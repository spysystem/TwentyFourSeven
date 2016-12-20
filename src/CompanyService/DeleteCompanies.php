<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class DeleteCompanies
 *
 * @package TwentyFourSeven\CompanyService
 */
class DeleteCompanies
{

    /**
     * @var ArrayOfCompany $companies
     */
    protected $companies = null;

    /**
     * @param ArrayOfCompany $companies
     */
    public function __construct($companies)
    {
      $this->companies = $companies;
    }

    /**
     * @return ArrayOfCompany
     */
    public function getCompanies()
    {
      return $this->companies;
    }

    /**
     * @param ArrayOfCompany $companies
     * @return \TwentyFourSeven\CompanyService\DeleteCompanies
     */
    public function setCompanies($companies)
    {
      $this->companies = $companies;
      return $this;
    }

}
