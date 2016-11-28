<?php

namespace TwentyFourSeven\CompanyService;

class SaveCustomerCategoriesResponse
{

    /**
     * @var ArrayOfAPIException $SaveCustomerCategoriesResult
     */
    protected $SaveCustomerCategoriesResult = null;

    /**
     * @param ArrayOfAPIException $SaveCustomerCategoriesResult
     */
    public function __construct($SaveCustomerCategoriesResult)
    {
      $this->SaveCustomerCategoriesResult = $SaveCustomerCategoriesResult;
    }

    /**
     * @return ArrayOfAPIException
     */
    public function getSaveCustomerCategoriesResult()
    {
      return $this->SaveCustomerCategoriesResult;
    }

    /**
     * @param ArrayOfAPIException $SaveCustomerCategoriesResult
     * @return \TwentyFourSeven\CompanyService\SaveCustomerCategoriesResponse
     */
    public function setSaveCustomerCategoriesResult($SaveCustomerCategoriesResult)
    {
      $this->SaveCustomerCategoriesResult = $SaveCustomerCategoriesResult;
      return $this;
    }

}
