<?php

namespace TwentyFourSeven\ClientService;

/**
 * Class User
 *
 * @package TwentyFourSeven\ClientService
 */
class User
{

    /**
     * @var int $ContactId
     */
    protected $ContactId = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $EmployeeId
     */
    protected $EmployeeId = null;


	/**
	 * User constructor.
	 */
	public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getContactId()
    {
      return $this->ContactId;
    }

    /**
     * @param int $ContactId
     * @return \TwentyFourSeven\ClientService\User
     */
    public function setContactId($ContactId)
    {
      $this->ContactId = $ContactId;
      return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return \TwentyFourSeven\ClientService\User
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return \TwentyFourSeven\ClientService\User
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getEmployeeId()
    {
      return $this->EmployeeId;
    }

    /**
     * @param int $EmployeeId
     * @return \TwentyFourSeven\ClientService\User
     */
    public function setEmployeeId($EmployeeId)
    {
      $this->EmployeeId = $EmployeeId;
      return $this;
    }

}
