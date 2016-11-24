<?php

namespace TwentyFourSeven\CompanyService;

class DeleteCustomerCategoriesResponse
{

    /**
     * @var ArrayOfAPIException $DeleteCustomerCategoriesResult
     */
    protected $DeleteCustomerCategoriesResult = null;

    /**
     * @param ArrayOfAPIException $DeleteCustomerCategoriesResult
     */
    public function __construct($DeleteCustomerCategoriesResult)
    {
      $this->DeleteCustomerCategoriesResult = $DeleteCustomerCategoriesResult;
    }

    /**
     * @return ArrayOfAPIException
     */
    public function getDeleteCustomerCategoriesResult()
    {
      return $this->DeleteCustomerCategoriesResult;
    }

    /**
     * @param ArrayOfAPIException $DeleteCustomerCategoriesResult
     * @return \TwentyFourSeven\CompanyService\DeleteCustomerCategoriesResponse
     */
    public function setDeleteCustomerCategoriesResult($DeleteCustomerCategoriesResult)
    {
      $this->DeleteCustomerCategoriesResult = $DeleteCustomerCategoriesResult;
      return $this;
    }

}
