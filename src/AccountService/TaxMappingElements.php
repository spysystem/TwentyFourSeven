<?php

namespace TwentyFourSeven\AccountService;

/**
 * Class TaxMappingElements
 *
 * @package TwentyFourSeven\AccountService
 */
class TaxMappingElements
{

    /**
     * @var string $Symbol
     */
    protected $Symbol = null;

    /**
     * @var int $TaxNo
     */
    protected $TaxNo = null;

    /**
     * @param int $TaxNo
     */
    public function __construct($TaxNo)
    {
      $this->TaxNo = $TaxNo;
    }

    /**
     * @return string
     */
    public function getSymbol()
    {
      return $this->Symbol;
    }

    /**
     * @param string $Symbol
     * @return \TwentyFourSeven\AccountService\TaxMappingElements
     */
    public function setSymbol($Symbol)
    {
      $this->Symbol = $Symbol;
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
     * @return \TwentyFourSeven\AccountService\TaxMappingElements
     */
    public function setTaxNo($TaxNo)
    {
      $this->TaxNo = $TaxNo;
      return $this;
    }

}
