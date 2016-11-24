<?php

namespace TwentyFourSeven\AccountService;

class GetTaxCodeListResponse
{

    /**
     * @var ArrayOfTaxCodeElement $GetTaxCodeListResult
     */
    protected $GetTaxCodeListResult = null;

    /**
     * @param ArrayOfTaxCodeElement $GetTaxCodeListResult
     */
    public function __construct($GetTaxCodeListResult)
    {
      $this->GetTaxCodeListResult = $GetTaxCodeListResult;
    }

    /**
     * @return ArrayOfTaxCodeElement
     */
    public function getGetTaxCodeListResult()
    {
      return $this->GetTaxCodeListResult;
    }

    /**
     * @param ArrayOfTaxCodeElement $GetTaxCodeListResult
     * @return \TwentyFourSeven\AccountService\GetTaxCodeListResponse
     */
    public function setGetTaxCodeListResult($GetTaxCodeListResult)
    {
      $this->GetTaxCodeListResult = $GetTaxCodeListResult;
      return $this;
    }

}
