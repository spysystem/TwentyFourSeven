<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class GetCategoriesResponse
 *
 * @package TwentyFourSeven\CompanyService
 */
class GetCategoriesResponse
{

    /**
     * @var ArrayOfCategory $GetCategoriesResult
     */
    protected $GetCategoriesResult = null;

    /**
     * @param ArrayOfCategory $GetCategoriesResult
     */
    public function __construct($GetCategoriesResult)
    {
      $this->GetCategoriesResult = $GetCategoriesResult;
    }

    /**
     * @return ArrayOfCategory
     */
    public function getGetCategoriesResult()
    {
      return $this->GetCategoriesResult;
    }

    /**
     * @param ArrayOfCategory $GetCategoriesResult
     * @return \TwentyFourSeven\CompanyService\GetCategoriesResponse
     */
    public function setGetCategoriesResult($GetCategoriesResult)
    {
      $this->GetCategoriesResult = $GetCategoriesResult;
      return $this;
    }

}
