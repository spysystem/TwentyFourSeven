<?php

namespace TwentyFourSeven\TransactionService;

/**
 * Class GetAggregatedResponse
 *
 * @package TwentyFourSeven\TransactionService
 */
class GetAggregatedResponse
{

    /**
     * @var ArrayOfAggregatedData $GetAggregatedResult
     */
    protected $GetAggregatedResult = null;

    /**
     * @param ArrayOfAggregatedData $GetAggregatedResult
     */
    public function __construct($GetAggregatedResult)
    {
      $this->GetAggregatedResult = $GetAggregatedResult;
    }

    /**
     * @return ArrayOfAggregatedData
     */
    public function getGetAggregatedResult()
    {
      return $this->GetAggregatedResult;
    }

    /**
     * @param ArrayOfAggregatedData $GetAggregatedResult
     * @return \TwentyFourSeven\TransactionService\GetAggregatedResponse
     */
    public function setGetAggregatedResult($GetAggregatedResult)
    {
      $this->GetAggregatedResult = $GetAggregatedResult;
      return $this;
    }

}
