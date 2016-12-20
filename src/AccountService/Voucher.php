<?php

namespace TwentyFourSeven\AccountService;

/**
 * Class Voucher
 *
 * @package TwentyFourSeven\AccountService
 */
class Voucher
{

    /**
     * @var int $TransactionNo
     */
    protected $TransactionNo = null;

    /**
     * @var ArrayOfEntry $entryList
     */
    protected $entryList = null;

    /**
     * @var int $Sort
     */
    protected $Sort = null;

    /**
     * @param int $TransactionNo
     * @param int $Sort
     */
    public function __construct($TransactionNo, $Sort)
    {
      $this->TransactionNo = $TransactionNo;
      $this->Sort = $Sort;
    }

    /**
     * @return int
     */
    public function getTransactionNo()
    {
      return $this->TransactionNo;
    }

    /**
     * @param int $TransactionNo
     * @return \TwentyFourSeven\AccountService\Voucher
     */
    public function setTransactionNo($TransactionNo)
    {
      $this->TransactionNo = $TransactionNo;
      return $this;
    }

    /**
     * @return ArrayOfEntry
     */
    public function getEntryList()
    {
      return $this->entryList;
    }

    /**
     * @param ArrayOfEntry $entryList
     * @return \TwentyFourSeven\AccountService\Voucher
     */
    public function setEntryList($entryList)
    {
      $this->entryList = $entryList;
      return $this;
    }

    /**
     * @return int
     */
    public function getSort()
    {
      return $this->Sort;
    }

    /**
     * @param int $Sort
     * @return \TwentyFourSeven\AccountService\Voucher
     */
    public function setSort($Sort)
    {
      $this->Sort = $Sort;
      return $this;
    }

}
