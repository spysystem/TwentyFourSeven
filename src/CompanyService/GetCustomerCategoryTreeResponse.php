<?php

namespace TwentyFourSeven\CompanyService;

class GetCustomerCategoryTreeResponse
{

    /**
     * @var ArrayOfKeyValuePair $GetCustomerCategoryTreeResult
     */
    protected $GetCustomerCategoryTreeResult = null;

    /**
     * @param ArrayOfKeyValuePair $GetCustomerCategoryTreeResult
     */
    public function __construct($GetCustomerCategoryTreeResult)
    {
      $this->GetCustomerCategoryTreeResult = $GetCustomerCategoryTreeResult;
    }

    /**
     * @return ArrayOfKeyValuePair
     */
    public function getGetCustomerCategoryTreeResult()
    {
      return $this->GetCustomerCategoryTreeResult;
    }

    /**
     * @param ArrayOfKeyValuePair $GetCustomerCategoryTreeResult
     * @return \TwentyFourSeven\CompanyService\GetCustomerCategoryTreeResponse
     */
    public function setGetCustomerCategoryTreeResult($GetCustomerCategoryTreeResult)
    {
      $this->GetCustomerCategoryTreeResult = $GetCustomerCategoryTreeResult;
      return $this;
    }

}
