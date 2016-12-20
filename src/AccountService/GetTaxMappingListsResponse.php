<?php

namespace TwentyFourSeven\AccountService;

/**
 * Class GetTaxMappingListsResponse
 *
 * @package TwentyFourSeven\AccountService
 */
class GetTaxMappingListsResponse
{

    /**
     * @var ArrayOfTaxMappingList $GetTaxMappingListsResult
     */
    protected $GetTaxMappingListsResult = null;

    /**
     * @param ArrayOfTaxMappingList $GetTaxMappingListsResult
     */
    public function __construct($GetTaxMappingListsResult)
    {
      $this->GetTaxMappingListsResult = $GetTaxMappingListsResult;
    }

    /**
     * @return ArrayOfTaxMappingList
     */
    public function getGetTaxMappingListsResult()
    {
      return $this->GetTaxMappingListsResult;
    }

    /**
     * @param ArrayOfTaxMappingList $GetTaxMappingListsResult
     * @return \TwentyFourSeven\AccountService\GetTaxMappingListsResponse
     */
    public function setGetTaxMappingListsResult($GetTaxMappingListsResult)
    {
      $this->GetTaxMappingListsResult = $GetTaxMappingListsResult;
      return $this;
    }

}
