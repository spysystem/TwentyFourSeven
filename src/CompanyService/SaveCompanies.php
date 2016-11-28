<?php

namespace TwentyFourSeven\CompanyService;

class SaveCompanies
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
     * @return \TwentyFourSeven\CompanyService\SaveCompanies
     */
    public function setCompanies($companies)
    {
      $this->companies = $companies;
      return $this;
    }

}
