<?php

namespace TwentyFourSeven\AccountService;

class GetEntryId
{

    /**
     * @var EntryId $argEntryId
     */
    protected $argEntryId = null;

    /**
     * @param EntryId $argEntryId
     */
    public function __construct($argEntryId)
    {
      $this->argEntryId = $argEntryId;
    }

    /**
     * @return EntryId
     */
    public function getArgEntryId()
    {
      return $this->argEntryId;
    }

    /**
     * @param EntryId $argEntryId
     * @return \TwentyFourSeven\AccountService\GetEntryId
     */
    public function setArgEntryId($argEntryId)
    {
      $this->argEntryId = $argEntryId;
      return $this;
    }

}
