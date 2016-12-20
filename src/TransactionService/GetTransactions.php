<?php

namespace TwentyFourSeven\TransactionService;

/**
 * Class GetTransactions
 *
 * @package TwentyFourSeven\TransactionService
 */
class GetTransactions
{

    /**
     * @var TransactionSearchParameters $searchParams
     */
    protected $searchParams = null;

    /**
     * @param TransactionSearchParameters $searchParams
     */
    public function __construct($searchParams)
    {
      $this->searchParams = $searchParams;
    }

    /**
     * @return TransactionSearchParameters
     */
    public function getSearchParams()
    {
      return $this->searchParams;
    }

    /**
     * @param TransactionSearchParameters $searchParams
     * @return \TwentyFourSeven\TransactionService\GetTransactions
     */
    public function setSearchParams($searchParams)
    {
      $this->searchParams = $searchParams;
      return $this;
    }

}
