<?php

namespace TwentyFourSeven\AccountService;

/**
 * Class AccountData
 *
 * @package TwentyFourSeven\AccountService
 */
class AccountData
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var string $AccountName
     */
    protected $AccountName = null;

    /**
     * @var int $AccountTax
     */
    protected $AccountTax = null;

    /**
     * @var int $TaxNo
     */
    protected $TaxNo = null;

    /**
     * @param int $AccountId
     * @param int $AccountNo
     * @param int $AccountTax
     * @param int $TaxNo
     */
    public function __construct($AccountId, $AccountNo, $AccountTax, $TaxNo)
    {
      $this->AccountId = $AccountId;
      $this->AccountNo = $AccountNo;
      $this->AccountTax = $AccountTax;
      $this->TaxNo = $TaxNo;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->AccountId;
    }

    /**
     * @param int $AccountId
     * @return \TwentyFourSeven\AccountService\AccountData
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAccountNo()
    {
      return $this->AccountNo;
    }

    /**
     * @param int $AccountNo
     * @return \TwentyFourSeven\AccountService\AccountData
     */
    public function setAccountNo($AccountNo)
    {
      $this->AccountNo = $AccountNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
      return $this->AccountName;
    }

    /**
     * @param string $AccountName
     * @return \TwentyFourSeven\AccountService\AccountData
     */
    public function setAccountName($AccountName)
    {
      $this->AccountName = $AccountName;
      return $this;
    }

    /**
     * @return int
     */
    public function getAccountTax()
    {
      return $this->AccountTax;
    }

    /**
     * @param int $AccountTax
     * @return \TwentyFourSeven\AccountService\AccountData
     */
    public function setAccountTax($AccountTax)
    {
      $this->AccountTax = $AccountTax;
      return $this;
    }

    /**
     * @return int
     */
    public function getTaxNo()
    {
      return $this->TaxNo;
    }

    /**
     * @param int $TaxNo
     * @return \TwentyFourSeven\AccountService\AccountData
     */
    public function setTaxNo($TaxNo)
    {
      $this->TaxNo = $TaxNo;
      return $this;
    }

}
