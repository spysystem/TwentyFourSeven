<?php

namespace TwentyFourSeven\AccountService;

/**
 * Class GetEntryIdResponse
 *
 * @package TwentyFourSeven\AccountService
 */
class GetEntryIdResponse
{

    /**
     * @var EntryId $GetEntryIdResult
     */
    protected $GetEntryIdResult = null;

    /**
     * @param EntryId $GetEntryIdResult
     */
    public function __construct($GetEntryIdResult)
    {
      $this->GetEntryIdResult = $GetEntryIdResult;
    }

    /**
     * @return EntryId
     */
    public function getGetEntryIdResult()
    {
      return $this->GetEntryIdResult;
    }

    /**
     * @param EntryId $GetEntryIdResult
     * @return \TwentyFourSeven\AccountService\GetEntryIdResponse
     */
    public function setGetEntryIdResult($GetEntryIdResult)
    {
      $this->GetEntryIdResult = $GetEntryIdResult;
      return $this;
    }

}
