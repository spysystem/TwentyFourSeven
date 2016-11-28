<?php

namespace TwentyFourSeven\CompanyService;

class Address
{

    /**
     * @var string $Street
     */
    protected $Street = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $PostalArea
     */
    protected $PostalArea = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getStreet()
    {
      return $this->Street;
    }

    /**
     * @param string $Street
     * @return \TwentyFourSeven\CompanyService\Address
     */
    public function setStreet($Street)
    {
      $this->Street = $Street;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return \TwentyFourSeven\CompanyService\Address
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return \TwentyFourSeven\CompanyService\Address
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalArea()
    {
      return $this->PostalArea;
    }

    /**
     * @param string $PostalArea
     * @return \TwentyFourSeven\CompanyService\Address
     */
    public function setPostalArea($PostalArea)
    {
      $this->PostalArea = $PostalArea;
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
     * @return \TwentyFourSeven\CompanyService\Address
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \TwentyFourSeven\CompanyService\Address
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return \TwentyFourSeven\CompanyService\Address
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

}
