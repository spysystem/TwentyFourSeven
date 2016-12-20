<?php

namespace TwentyFourSeven\AccountService;

/**
 * Class EntryId
 *
 * @package TwentyFourSeven\AccountService
 */
class EntryId
{

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var int $SortNo
     */
    protected $SortNo = null;

    /**
     * @var int $EntryNo
     */
    protected $EntryNo = null;

    /**
     * @param \DateTime $Date
     * @param int $SortNo
     * @param int $EntryNo
     */
    public function __construct(\DateTime $Date, $SortNo, $EntryNo)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
      $this->SortNo = $SortNo;
      $this->EntryNo = $EntryNo;
    }

    /**
     * @return \DateTime|bool|null
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return \TwentyFourSeven\AccountService\EntryId
     */
    public function setDate(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getSortNo()
    {
      return $this->SortNo;
    }

    /**
     * @param int $SortNo
     * @return \TwentyFourSeven\AccountService\EntryId
     */
    public function setSortNo($SortNo)
    {
      $this->SortNo = $SortNo;
      return $this;
    }

    /**
     * @return int
     */
    public function getEntryNo()
    {
      return $this->EntryNo;
    }

    /**
     * @param int $EntryNo
     * @return \TwentyFourSeven\AccountService\EntryId
     */
    public function setEntryNo($EntryNo)
    {
      $this->EntryNo = $EntryNo;
      return $this;
    }

}
