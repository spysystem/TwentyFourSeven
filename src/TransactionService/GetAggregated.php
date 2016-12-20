<?php

namespace TwentyFourSeven\TransactionService;

/**
 * Class GetAggregated
 *
 * @package TwentyFourSeven\TransactionService
 */
class GetAggregated
{

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var ArrayOfDimension $dimensions
     */
    protected $dimensions = null;

    /**
     * @var ArrayOfShort $accountNos
     */
    protected $accountNos = null;

    /**
     * @var PeriodType $periodType
     */
    protected $periodType = null;

    /**
     * @var boolean $returnIB
     */
    protected $returnIB = null;

    /**
     * @param \DateTime $startDate
     * @param ArrayOfDimension $dimensions
     * @param ArrayOfShort $accountNos
     * @param PeriodType $periodType
     * @param boolean $returnIB
     */
    public function __construct(\DateTime $startDate, $dimensions, $accountNos, $periodType, $returnIB)
    {
      $this->startDate = $startDate->format(\DateTime::ATOM);
      $this->dimensions = $dimensions;
      $this->accountNos = $accountNos;
      $this->periodType = $periodType;
      $this->returnIB = $returnIB;
    }

    /**
     * @return \DateTime|bool|null
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \TwentyFourSeven\TransactionService\GetAggregated
     */
    public function setStartDate(\DateTime $startDate)
    {
      $this->startDate = $startDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ArrayOfDimension
     */
    public function getDimensions()
    {
      return $this->dimensions;
    }

    /**
     * @param ArrayOfDimension $dimensions
     * @return \TwentyFourSeven\TransactionService\GetAggregated
     */
    public function setDimensions($dimensions)
    {
      $this->dimensions = $dimensions;
      return $this;
    }

    /**
     * @return ArrayOfShort
     */
    public function getAccountNos()
    {
      return $this->accountNos;
    }

    /**
     * @param ArrayOfShort $accountNos
     * @return \TwentyFourSeven\TransactionService\GetAggregated
     */
    public function setAccountNos($accountNos)
    {
      $this->accountNos = $accountNos;
      return $this;
    }

    /**
     * @return PeriodType
     */
    public function getPeriodType()
    {
      return $this->periodType;
    }

    /**
     * @param PeriodType $periodType
     * @return \TwentyFourSeven\TransactionService\GetAggregated
     */
    public function setPeriodType($periodType)
    {
      $this->periodType = $periodType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnIB()
    {
      return $this->returnIB;
    }

    /**
     * @param boolean $returnIB
     * @return \TwentyFourSeven\TransactionService\GetAggregated
     */
    public function setReturnIB($returnIB)
    {
      $this->returnIB = $returnIB;
      return $this;
    }

}
