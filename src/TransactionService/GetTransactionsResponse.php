<?php

namespace TwentyFourSeven\TransactionService;

/**
 * Class GetTransactionsResponse
 *
 * @package TwentyFourSeven\TransactionService
 */
class GetTransactionsResponse
{

    /**
     * @var ArrayOfTransaction $GetTransactionsResult
     */
    protected $GetTransactionsResult = null;

    /**
     * @param ArrayOfTransaction $GetTransactionsResult
     */
    public function __construct($GetTransactionsResult)
    {
      $this->GetTransactionsResult = $GetTransactionsResult;
    }

    /**
     * @return ArrayOfTransaction
     */
    public function getGetTransactionsResult()
    {
      return $this->GetTransactionsResult;
    }

    /**
     * @param ArrayOfTransaction $GetTransactionsResult
     * @return \TwentyFourSeven\TransactionService\GetTransactionsResponse
     */
    public function setGetTransactionsResult($GetTransactionsResult)
    {
      $this->GetTransactionsResult = $GetTransactionsResult;
      return $this;
    }

}
