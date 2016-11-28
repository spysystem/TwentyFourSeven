<?php

namespace TwentyFourSeven\ClientService;

class VatType
{

    /**
     * @var int $No
     */
    protected $No = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var float $Rate
     */
    protected $Rate = null;

    /**
     * @param int $No
     * @param float $Rate
     */
    public function __construct($No, $Rate)
    {
      $this->No = $No;
      $this->Rate = $Rate;
    }

    /**
     * @return int
     */
    public function getNo()
    {
      return $this->No;
    }

    /**
     * @param int $No
     * @return \TwentyFourSeven\ClientService\VatType
     */
    public function setNo($No)
    {
      $this->No = $No;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \TwentyFourSeven\ClientService\VatType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \TwentyFourSeven\ClientService\VatType
     */
    public function setRate($Rate)
    {
      $this->Rate = $Rate;
      return $this;
    }

}
