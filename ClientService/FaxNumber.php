<?php

namespace TwentyFourSeven\ClientService;

class FaxNumber
{

    /**
     * @var FaxNumberType $Type
     */
    protected $Type = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param FaxNumberType $Type
     */
    public function __construct($Type)
    {
      $this->Type = $Type;
    }

    /**
     * @return FaxNumberType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param FaxNumberType $Type
     * @return \TwentyFourSeven\ClientService\FaxNumber
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \TwentyFourSeven\ClientService\FaxNumber
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
