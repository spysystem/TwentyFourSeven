<?php

namespace TwentyFourSeven\ClientService;

class PhoneNumber
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \TwentyFourSeven\ClientService\PhoneNumber
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \TwentyFourSeven\ClientService\PhoneNumber
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
