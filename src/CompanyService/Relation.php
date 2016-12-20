<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class Relation
 *
 * @package TwentyFourSeven\CompanyService
 */
class Relation
{

    /**
     * @var int $ContactId
     */
    protected $ContactId = null;

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $Role
     */
    protected $Role = null;

    /**
     * @var int $RoleId
     */
    protected $RoleId = null;

    /**
     * @var PhoneNumbers $PhoneNumbers
     */
    protected $PhoneNumbers = null;

    /**
     * @var EmailAddresses $EmailAddresses
     */
    protected $EmailAddresses = null;

    /**
     * @var string $Fax
     */
    protected $Fax = null;


	/**
	 * Relation constructor.
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
     * @return \TwentyFourSeven\CompanyService\Relation
     */
    public function setContactId($ContactId)
    {
      $this->ContactId = $ContactId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId()
    {
      return $this->CompanyId;
    }

    /**
     * @param int $CompanyId
     * @return \TwentyFourSeven\CompanyService\Relation
     */
    public function setCompanyId($CompanyId)
    {
      $this->CompanyId = $CompanyId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \TwentyFourSeven\CompanyService\Relation
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \TwentyFourSeven\CompanyService\Relation
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRole()
    {
      return $this->Role;
    }

    /**
     * @param string $Role
     * @return \TwentyFourSeven\CompanyService\Relation
     */
    public function setRole($Role)
    {
      $this->Role = $Role;
      return $this;
    }

    /**
     * @return int
     */
    public function getRoleId()
    {
      return $this->RoleId;
    }

    /**
     * @param int $RoleId
     * @return \TwentyFourSeven\CompanyService\Relation
     */
    public function setRoleId($RoleId)
    {
      $this->RoleId = $RoleId;
      return $this;
    }

    /**
     * @return PhoneNumbers
     */
    public function getPhoneNumbers()
    {
      return $this->PhoneNumbers;
    }

    /**
     * @param PhoneNumbers $PhoneNumbers
     * @return \TwentyFourSeven\CompanyService\Relation
     */
    public function setPhoneNumbers($PhoneNumbers)
    {
      $this->PhoneNumbers = $PhoneNumbers;
      return $this;
    }

    /**
     * @return EmailAddresses
     */
    public function getEmailAddresses()
    {
      return $this->EmailAddresses;
    }

    /**
     * @param EmailAddresses $EmailAddresses
     * @return \TwentyFourSeven\CompanyService\Relation
     */
    public function setEmailAddresses($EmailAddresses)
    {
      $this->EmailAddresses = $EmailAddresses;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param string $Fax
     * @return \TwentyFourSeven\CompanyService\Relation
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
      return $this;
    }

}
