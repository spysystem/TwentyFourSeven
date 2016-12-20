<?php

namespace TwentyFourSeven\ClientService;

/**
 * Class Currency
 *
 * @package TwentyFourSeven\ClientService
 */
class Currency
{

    /**
     * @var string $Symbol
     */
    protected $Symbol = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var float $Rate
     */
    protected $Rate = null;

    /**
     * @var int $Unit
     */
    protected $Unit = null;

    /**
     * @param int $Id
     * @param float $Rate
     * @param int $Unit
     */
    public function __construct($Id, $Rate, $Unit)
    {
      $this->Id = $Id;
      $this->Rate = $Rate;
      $this->Unit = $Unit;
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
     * @return \TwentyFourSeven\ClientService\Currency
     */
    public function setSymbol($Symbol)
    {
      $this->Symbol = $Symbol;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \TwentyFourSeven\ClientService\Currency
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
      return $this->Rate;
    }

    /**
     * @param float $Rate
     * @return \TwentyFourSeven\ClientService\Currency
     */
    public function setRate($Rate)
    {
      $this->Rate = $Rate;
      return $this;
    }

    /**
     * @return int
     */
    public function getUnit()
    {
      return $this->Unit;
    }

    /**
     * @param int $Unit
     * @return \TwentyFourSeven\ClientService\Currency
     */
    public function setUnit($Unit)
    {
      $this->Unit = $Unit;
      return $this;
    }

}
