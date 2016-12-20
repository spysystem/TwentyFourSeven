<?php

namespace TwentyFourSeven\TransactionService;

/**
 * Class GetTransactionTypesResponse
 *
 * @package TwentyFourSeven\TransactionService
 */
class GetTransactionTypesResponse
{

    /**
     * @var ArrayOfTransactionType $GetTransactionTypesResult
     */
    protected $GetTransactionTypesResult = null;

    /**
     * @param ArrayOfTransactionType $GetTransactionTypesResult
     */
    public function __construct($GetTransactionTypesResult)
    {
      $this->GetTransactionTypesResult = $GetTransactionTypesResult;
    }

    /**
     * @return ArrayOfTransactionType
     */
    public function getGetTransactionTypesResult()
    {
      return $this->GetTransactionTypesResult;
    }

    /**
     * @param ArrayOfTransactionType $GetTransactionTypesResult
     * @return \TwentyFourSeven\TransactionService\GetTransactionTypesResponse
     */
    public function setGetTransactionTypesResult($GetTransactionTypesResult)
    {
      $this->GetTransactionTypesResult = $GetTransactionTypesResult;
      return $this;
    }

}
