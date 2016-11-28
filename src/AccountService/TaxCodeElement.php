<?php

namespace TwentyFourSeven\AccountService;

class TaxCodeElement
{

    /**
     * @var int $TaxId
     */
    protected $TaxId = null;

    /**
     * @var string $TaxNo
     */
    protected $TaxNo = null;

    /**
     * @var string $TaxName
     */
    protected $TaxName = null;

    /**
     * @var float $TaxRate
     */
    protected $TaxRate = null;

    /**
     * @param int $TaxId
     * @param float $TaxRate
     */
    public function __construct($TaxId, $TaxRate)
    {
      $this->TaxId = $TaxId;
      $this->TaxRate = $TaxRate;
    }

    /**
     * @return int
     */
    public function getTaxId()
    {
      return $this->TaxId;
    }

    /**
     * @param int $TaxId
     * @return \TwentyFourSeven\AccountService\TaxCodeElement
     */
    public function setTaxId($TaxId)
    {
      $this->TaxId = $TaxId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxNo()
    {
      return $this->TaxNo;
    }

    /**
     * @param string $TaxNo
     * @return \TwentyFourSeven\AccountService\TaxCodeElement
     */
    public function setTaxNo($TaxNo)
    {
      $this->TaxNo = $TaxNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxName()
    {
      return $this->TaxName;
    }

    /**
     * @param string $TaxName
     * @return \TwentyFourSeven\AccountService\TaxCodeElement
     */
    public function setTaxName($TaxName)
    {
      $this->TaxName = $TaxName;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxRate()
    {
      return $this->TaxRate;
    }

    /**
     * @param float $TaxRate
     * @return \TwentyFourSeven\AccountService\TaxCodeElement
     */
    public function setTaxRate($TaxRate)
    {
      $this->TaxRate = $TaxRate;
      return $this;
    }

}
