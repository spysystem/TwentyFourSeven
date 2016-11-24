<?php

namespace TwentyFourSeven\CompanyService;

class GetCustomerCategoriesResponse
{

    /**
     * @var ArrayOfInt $GetCustomerCategoriesResult
     */
    protected $GetCustomerCategoriesResult = null;

    /**
     * @param ArrayOfInt $GetCustomerCategoriesResult
     */
    public function __construct($GetCustomerCategoriesResult)
    {
      $this->GetCustomerCategoriesResult = $GetCustomerCategoriesResult;
    }

    /**
     * @return ArrayOfInt
     */
    public function getGetCustomerCategoriesResult()
    {
      return $this->GetCustomerCategoriesResult;
    }

    /**
     * @param ArrayOfInt $GetCustomerCategoriesResult
     * @return \TwentyFourSeven\CompanyService\GetCustomerCategoriesResponse
     */
    public function setGetCustomerCategoriesResult($GetCustomerCategoriesResult)
    {
      $this->GetCustomerCategoriesResult = $GetCustomerCategoriesResult;
      return $this;
    }

}
