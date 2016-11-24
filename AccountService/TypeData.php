<?php

namespace TwentyFourSeven\AccountService;

class TypeData
{

    /**
     * @var int $TypeId
     */
    protected $TypeId = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var int $EntrySeriesID
     */
    protected $EntrySeriesID = null;

    /**
     * @param int $TypeId
     * @param int $EntrySeriesID
     */
    public function __construct($TypeId, $EntrySeriesID)
    {
      $this->TypeId = $TypeId;
      $this->EntrySeriesID = $EntrySeriesID;
    }

    /**
     * @return int
     */
    public function getTypeId()
    {
      return $this->TypeId;
    }

    /**
     * @param int $TypeId
     * @return \TwentyFourSeven\AccountService\TypeData
     */
    public function setTypeId($TypeId)
    {
      $this->TypeId = $TypeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \TwentyFourSeven\AccountService\TypeData
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return int
     */
    public function getEntrySeriesID()
    {
      return $this->EntrySeriesID;
    }

    /**
     * @param int $EntrySeriesID
     * @return \TwentyFourSeven\AccountService\TypeData
     */
    public function setEntrySeriesID($EntrySeriesID)
    {
      $this->EntrySeriesID = $EntrySeriesID;
      return $this;
    }

}
