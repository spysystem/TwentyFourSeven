<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class GetStatusesResponse
 *
 * @package TwentyFourSeven\CompanyService
 */
class GetStatusesResponse
{

    /**
     * @var ArrayOfKeyValuePair $GetStatusesResult
     */
    protected $GetStatusesResult = null;

    /**
     * @param ArrayOfKeyValuePair $GetStatusesResult
     */
    public function __construct($GetStatusesResult)
    {
      $this->GetStatusesResult = $GetStatusesResult;
    }

    /**
     * @return ArrayOfKeyValuePair
     */
    public function getGetStatusesResult()
    {
      return $this->GetStatusesResult;
    }

    /**
     * @param ArrayOfKeyValuePair $GetStatusesResult
     * @return \TwentyFourSeven\CompanyService\GetStatusesResponse
     */
    public function setGetStatusesResult($GetStatusesResult)
    {
      $this->GetStatusesResult = $GetStatusesResult;
      return $this;
    }

}
