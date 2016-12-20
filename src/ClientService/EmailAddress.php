<?php

namespace TwentyFourSeven\ClientService;

/**
 * Class EmailAddress
 *
 * @package TwentyFourSeven\ClientService
 */
class EmailAddress
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Value
     */
    protected $Value = null;


	/**
	 * EmailAddress constructor.
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
     * @return \TwentyFourSeven\ClientService\EmailAddress
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \TwentyFourSeven\ClientService\EmailAddress
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \TwentyFourSeven\ClientService\EmailAddress
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
