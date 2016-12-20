<?php

namespace TwentyFourSeven\TransactionService;

/**
 * Class GetUserDefinedDimensionsResponse
 *
 * @package TwentyFourSeven\TransactionService
 */
class GetUserDefinedDimensionsResponse
{

    /**
     * @var ArrayOfDimension $GetUserDefinedDimensionsResult
     */
    protected $GetUserDefinedDimensionsResult = null;

    /**
     * @param ArrayOfDimension $GetUserDefinedDimensionsResult
     */
    public function __construct($GetUserDefinedDimensionsResult)
    {
      $this->GetUserDefinedDimensionsResult = $GetUserDefinedDimensionsResult;
    }

    /**
     * @return ArrayOfDimension
     */
    public function getGetUserDefinedDimensionsResult()
    {
      return $this->GetUserDefinedDimensionsResult;
    }

    /**
     * @param ArrayOfDimension $GetUserDefinedDimensionsResult
     * @return \TwentyFourSeven\TransactionService\GetUserDefinedDimensionsResponse
     */
    public function setGetUserDefinedDimensionsResult($GetUserDefinedDimensionsResult)
    {
      $this->GetUserDefinedDimensionsResult = $GetUserDefinedDimensionsResult;
      return $this;
    }

}
