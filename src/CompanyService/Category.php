<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class Category
 *
 * @package TwentyFourSeven\CompanyService
 */
class Category
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var boolean $ShowContact
     */
    protected $ShowContact = null;

    /**
     * @var boolean $ShowCompany
     */
    protected $ShowCompany = null;


	/**
	 * Category constructor.
	 */
	public function __construct()
    {
    
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
     * @return \TwentyFourSeven\CompanyService\Category
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
     * @return \TwentyFourSeven\CompanyService\Category
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowContact()
    {
      return $this->ShowContact;
    }

    /**
     * @param boolean $ShowContact
     * @return \TwentyFourSeven\CompanyService\Category
     */
    public function setShowContact($ShowContact)
    {
      $this->ShowContact = $ShowContact;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowCompany()
    {
      return $this->ShowCompany;
    }

    /**
     * @param boolean $ShowCompany
     * @return \TwentyFourSeven\CompanyService\Category
     */
    public function setShowCompany($ShowCompany)
    {
      $this->ShowCompany = $ShowCompany;
      return $this;
    }

}
