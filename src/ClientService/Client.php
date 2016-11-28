<?php

namespace TwentyFourSeven\ClientService;

class Client
{

    /**
     * @var Addresses $AddressList
     */
    protected $AddressList = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var EmailAddresses $EmailAddressList
     */
    protected $EmailAddressList = null;

    /**
     * @var string $FactoringClientNo
     */
    protected $FactoringClientNo = null;

    /**
     * @var string $FactoringText
     */
    protected $FactoringText = null;

    /**
     * @var ArrayOfFaxNumber $FaxNumberList
     */
    protected $FaxNumberList = null;

    /**
     * @var boolean $IsUsingFactoring
     */
    protected $IsUsingFactoring = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var PhoneNumbers $PhoneNumberList
     */
    protected $PhoneNumberList = null;

    /**
     * @var int $ReminderDays
     */
    protected $ReminderDays = null;

    /**
     * @var int $ReminderDays2
     */
    protected $ReminderDays2 = null;

    /**
     * @var int $ReminderDays3
     */
    protected $ReminderDays3 = null;

    /**
     * @var int $UserId
     */
    protected $UserId = null;

    /**
     * @var string $BankAccount
     */
    protected $BankAccount = null;

    /**
     * @var string $IBAN
     */
    protected $IBAN = null;

    /**
     * @var string $OrganizationNumber
     */
    protected $OrganizationNumber = null;

    /**
     * @var string $Swift
     */
    protected $Swift = null;

    /**
     * @var int $ResellerId
     */
    protected $ResellerId = null;

    /**
     * @var string $ResellerName
     */
    protected $ResellerName = null;

    /**
     * @param boolean $IsUsingFactoring
     * @param int $ReminderDays
     * @param int $ReminderDays2
     * @param int $ReminderDays3
     * @param int $UserId
     */
    public function __construct($IsUsingFactoring, $ReminderDays, $ReminderDays2, $ReminderDays3, $UserId)
    {
      $this->IsUsingFactoring = $IsUsingFactoring;
      $this->ReminderDays = $ReminderDays;
      $this->ReminderDays2 = $ReminderDays2;
      $this->ReminderDays3 = $ReminderDays3;
      $this->UserId = $UserId;
    }

    /**
     * @return Addresses
     */
    public function getAddressList()
    {
      return $this->AddressList;
    }

    /**
     * @param Addresses $AddressList
     * @return \TwentyFourSeven\ClientService\Client
     */
    public function setAddressList($AddressList)
    {
      $this->AddressList = $AddressList;
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
     * @return \TwentyFourSeven\ClientService\Client
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return EmailAddresses
     */
    public function getEmailAddressList()
    {
      return $this->EmailAddressList;
    }

    /**
     * @param EmailAddresses $EmailAddressList
     * @return \TwentyFourSeven\ClientService\Client
     */
    public function setEmailAddressList($EmailAddressList)
    {
      $this->EmailAddressList = $EmailAddressList;
      return $this;
    }

    /**
     * @return string
     */
    public function getFactoringClientNo()
    {
      return $this->FactoringClientNo;
    }

    /**
     * @param string $FactoringClientNo
     * @return \TwentyFourSeven\ClientService\Client
     */
    public function setFactoringClientNo($FactoringClientNo)
    {
      $this->FactoringClientNo = $FactoringClientNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getFactoringText()
    {
      return $this->FactoringText;
    }

    /**
     * @param string $FactoringText
     * @return \TwentyFourSeven\ClientService\Client
     */
    public function setFactoringText($FactoringText)
    {
      $this->FactoringText = $FactoringText;
      return $this;
    }

    /**
     * @return ArrayOfFaxNumber
     */
    public function getFaxNumberList()
    {
      return $this->FaxNumberList;
    }

    /**
     * @param ArrayOfFaxNumber $FaxNumberList
     * @return \TwentyFourSeven\ClientService\Client
     */
    public function setFaxNumberList($FaxNumberList)
    {
      $this->FaxNumberList = $FaxNumberList;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsUsingFactoring()
    {
      return $this->IsUsingFactoring;
    }

    /**
     * @param boolean $IsUsingFactoring
     * @return \TwentyFourSeven\ClientService\Client
     */
    public function setIsUsingFactoring($IsUsingFactoring)
    {
      $this->IsUsingFactoring = $IsUsingFactoring;
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
     * @return \TwentyFourSeven\ClientService\Client
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return PhoneNumbers
     */
    public function getPhoneNumberList()
    {
      return $this->PhoneNumberList;
    }

    /**
     * @param PhoneNumbers $PhoneNumberList
     * @return \TwentyFourSeven\ClientService\Client
     */
    public function setPhoneNumberList($PhoneNumberList)
    {
      $this->PhoneNumberList = $PhoneNumberList;
      return $this;
    }

    /**
     * @return int
     */
    public function getReminderDays()
    {
      return $this->ReminderDays;
    }

    /**
     * @param int $ReminderDays
     * @return \TwentyFourSeven\ClientService\Client
     */
    public function setReminderDays($ReminderDays)
    {
      $this->ReminderDays = $ReminderDays;
      return $this;
    }

    /**
     * @return int
     */
    public function getReminderDays2()
    {
      return $this->ReminderDays2;
    }

    /**
     * @param int $ReminderDays2
     * @return \TwentyFourSeven\ClientService\Client
     */
    public function setReminderDays2($ReminderDays2)
    {
      $this->ReminderDays2 = $ReminderDays2;
      return $this;
    }

    /**
     * @return int
     */
    public function getReminderDays3()
    {
      return $this->ReminderDays3;
    }

    /**
     * @param int $ReminderDays3
     * @return \TwentyFourSeven\ClientService\Client
     */
    public function setReminderDays3($ReminderDays3)
    {
      $this->ReminderDays3 = $ReminderDays3;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
      return $this->UserId;
    }

    /**
     * @param int $UserId
     * @return \TwentyFourSeven\ClientService\Client
     */
    public function setUserId($UserId)
    {
      $this->UserId = $UserId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankAccount()
    {
      return $this->BankAccount;
    }

    /**
     * @param string $BankAccount
     * @return \TwentyFourSeven\ClientService\Client
     */
    public function setBankAccount($BankAccount)
    {
      $this->BankAccount = $BankAccount;
      return $this;
    }

    /**
     * @return string
     */
    public function getIBAN()
    {
      return $this->IBAN;
    }

    /**
     * @param string $IBAN
     * @return \TwentyFourSeven\ClientService\Client
     */
    public function setIBAN($IBAN)
    {
      $this->IBAN = $IBAN;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrganizationNumber()
    {
      return $this->OrganizationNumber;
    }

    /**
     * @param string $OrganizationNumber
     * @return \TwentyFourSeven\ClientService\Client
     */
    public function setOrganizationNumber($OrganizationNumber)
    {
      $this->OrganizationNumber = $OrganizationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSwift()
    {
      return $this->Swift;
    }

    /**
     * @param string $Swift
     * @return \TwentyFourSeven\ClientService\Client
     */
    public function setSwift($Swift)
    {
      $this->Swift = $Swift;
      return $this;
    }

    /**
     * @return int
     */
    public function getResellerId()
    {
      return $this->ResellerId;
    }

    /**
     * @param int $ResellerId
     * @return \TwentyFourSeven\ClientService\Client
     */
    public function setResellerId($ResellerId)
    {
      $this->ResellerId = $ResellerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getResellerName()
    {
      return $this->ResellerName;
    }

    /**
     * @param string $ResellerName
     * @return \TwentyFourSeven\ClientService\Client
     */
    public function setResellerName($ResellerName)
    {
      $this->ResellerName = $ResellerName;
      return $this;
    }

}
