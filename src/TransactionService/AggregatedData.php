<?php

namespace TwentyFourSeven\TransactionService;

/**
 * Class AggregatedData
 *
 * @package TwentyFourSeven\TransactionService
 */
class AggregatedData
{

    /**
     * @var float $IncomingBalance
     */
    protected $IncomingBalance = null;

    /**
     * @var float $TotalBalance
     */
    protected $TotalBalance = null;

    /**
     * @var ArrayOfKeyValuePair $Periods
     */
    protected $Periods = null;

    /**
     * @var Dimension $Dimension
     */
    protected $Dimension = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @param float $IncomingBalance
     * @param float $TotalBalance
     */
    public function __construct($IncomingBalance, $TotalBalance)
    {
      $this->IncomingBalance = $IncomingBalance;
      $this->TotalBalance = $TotalBalance;
    }

    /**
     * @return float
     */
    public function getIncomingBalance()
    {
      return $this->IncomingBalance;
    }

    /**
     * @param float $IncomingBalance
     * @return \TwentyFourSeven\TransactionService\AggregatedData
     */
    public function setIncomingBalance($IncomingBalance)
    {
      $this->IncomingBalance = $IncomingBalance;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalBalance()
    {
      return $this->TotalBalance;
    }

    /**
     * @param float $TotalBalance
     * @return \TwentyFourSeven\TransactionService\AggregatedData
     */
    public function setTotalBalance($TotalBalance)
    {
      $this->TotalBalance = $TotalBalance;
      return $this;
    }

    /**
     * @return ArrayOfKeyValuePair
     */
    public function getPeriods()
    {
      return $this->Periods;
    }

    /**
     * @param ArrayOfKeyValuePair $Periods
     * @return \TwentyFourSeven\TransactionService\AggregatedData
     */
    public function setPeriods($Periods)
    {
      $this->Periods = $Periods;
      return $this;
    }

    /**
     * @return Dimension
     */
    public function getDimension()
    {
      return $this->Dimension;
    }

    /**
     * @param Dimension $Dimension
     * @return \TwentyFourSeven\TransactionService\AggregatedData
     */
    public function setDimension($Dimension)
    {
      $this->Dimension = $Dimension;
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
     * @return \TwentyFourSeven\TransactionService\AggregatedData
     */
    public function setAccountNo($AccountNo)
    {
      $this->AccountNo = $AccountNo;
      return $this;
    }

}
