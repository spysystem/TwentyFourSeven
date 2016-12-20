<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class PhoneNumber
 *
 * @package TwentyFourSeven\CompanyService
 */
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


	/**
	 * PhoneNumber constructor.
	 */
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
     * @return \TwentyFourSeven\CompanyService\PhoneNumber
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
     * @return \TwentyFourSeven\CompanyService\PhoneNumber
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
