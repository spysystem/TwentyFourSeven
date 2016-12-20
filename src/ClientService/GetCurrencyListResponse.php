<?php

namespace TwentyFourSeven\ClientService;

/**
 * Class GetCurrencyListResponse
 *
 * @package TwentyFourSeven\ClientService
 */
class GetCurrencyListResponse
{

    /**
     * @var ArrayOfCurrency $GetCurrencyListResult
     */
    protected $GetCurrencyListResult = null;

    /**
     * @param ArrayOfCurrency $GetCurrencyListResult
     */
    public function __construct($GetCurrencyListResult)
    {
      $this->GetCurrencyListResult = $GetCurrencyListResult;
    }

    /**
     * @return ArrayOfCurrency
     */
    public function getGetCurrencyListResult()
    {
      return $this->GetCurrencyListResult;
    }

    /**
     * @param ArrayOfCurrency $GetCurrencyListResult
     * @return \TwentyFourSeven\ClientService\GetCurrencyListResponse
     */
    public function setGetCurrencyListResult($GetCurrencyListResult)
    {
      $this->GetCurrencyListResult = $GetCurrencyListResult;
      return $this;
    }

}
