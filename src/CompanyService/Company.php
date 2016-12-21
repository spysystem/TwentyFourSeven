<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class Company
 *
 * @package TwentyFourSeven\CompanyService
 */
class Company
{

    /**
     * @var APIException $APIException
     */
    protected $APIException = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $OrganizationNumber
     */
    protected $OrganizationNumber = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $NickName
     */
    protected $NickName = null;

    /**
     * @var Addresses $Addresses
     */
    protected $Addresses = null;

    /**
     * @var PhoneNumbers $PhoneNumbers
     */
    protected $PhoneNumbers = null;

    /**
     * @var EmailAddresses $EmailAddresses
     */
    protected $EmailAddresses = null;

    /**
     * @var string $Url
     */
    protected $Url = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    /**
     * @var string $InvoiceLanguage
     */
    protected $InvoiceLanguage = null;

    /**
     * @var CompanyType|string $Type
     */
    protected $Type = null;

    /**
     * @var string $Username
     */
    protected $Username = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var \DateTime $IncorporationDate
     */
    protected $IncorporationDate = null;

    /**
     * @var \DateTime $DateCreated
     */
    protected $DateCreated = null;

    /**
     * @var int $Status
     */
    protected $Status = null;

    /**
     * @var int $PriceList
     */
    protected $PriceList = null;

    /**
     * @var int $Owner
     */
    protected $Owner = null;

    /**
     * @var string $BankAccountNo
     */
    protected $BankAccountNo = null;

    /**
     * @var int $TermsOfDeliveryId
     */
    protected $TermsOfDeliveryId = null;

    /**
     * @var int $AccountDebit
     */
    protected $AccountDebit = null;

    /**
     * @var int $AccountCredit
     */
    protected $AccountCredit = null;

    /**
     * @var float $Discount
     */
    protected $Discount = null;

    /**
     * @var int $TypeGroup
     */
    protected $TypeGroup = null;

    /**
     * @var float $ShareCapital
     */
    protected $ShareCapital = null;

    /**
     * @var int $NumberOfEmployees
     */
    protected $NumberOfEmployees = null;

    /**
     * @var float $Turnover
     */
    protected $Turnover = null;

    /**
     * @var float $Profit
     */
    protected $Profit = null;

    /**
     * @var int $IndustryId
     */
    protected $IndustryId = null;

    /**
     * @var int $MemberNo
     */
    protected $MemberNo = null;

    /**
     * @var \DateTime $DateChanged
     */
    protected $DateChanged = null;

    /**
     * @var boolean $BlockInvoice
     */
    protected $BlockInvoice = null;

    /**
     * @var ArrayOfRelation $Relations
     */
    protected $Relations = null;

    /**
     * @var ArrayOfCompanyMap $Maps
     */
    protected $Maps = null;

    /**
     * @var DistributionMethod $DistributionMethod
     */
    protected $DistributionMethod = null;

    /**
     * @var CurrencyType $CurrencyId
     */
    protected $CurrencyId = null;

    /**
     * @var int $PaymentTime
     */
    protected $PaymentTime = null;

    /**
     * @var string $GlnNumber
     */
    protected $GlnNumber = null;

    /**
     * @var boolean $Factoring
     */
    protected $Factoring = null;

    /**
     * @var int $LedgerCustomerAccount
     */
    protected $LedgerCustomerAccount = null;

    /**
     * @var int $LedgerSupplierAccount
     */
    protected $LedgerSupplierAccount = null;


	/**
	 * Company constructor.
	 */
	public function __construct()
    {
    
    }

    /**
     * @return APIException
     */
    public function getAPIException()
    {
      return $this->APIException;
    }

    /**
     * @param APIException $APIException
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setAPIException($APIException)
    {
      $this->APIException = $APIException;
      return $this;
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
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setOrganizationNumber($OrganizationNumber)
    {
      $this->OrganizationNumber = $OrganizationNumber;
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
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getNickName()
    {
      return $this->NickName;
    }

    /**
     * @param string $NickName
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setNickName($NickName)
    {
      $this->NickName = $NickName;
      return $this;
    }

    /**
     * @return Addresses
     */
    public function getAddresses()
    {
      return $this->Addresses;
    }

    /**
     * @param Addresses $Addresses
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setAddresses($Addresses)
    {
      $this->Addresses = $Addresses;
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
     * @return \TwentyFourSeven\CompanyService\Company
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
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setEmailAddresses($EmailAddresses)
    {
      $this->EmailAddresses = $EmailAddresses;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->Url;
    }

    /**
     * @param string $Url
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setUrl($Url)
    {
      $this->Url = $Url;
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
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
      return $this->Note;
    }

    /**
     * @param string $Note
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setNote($Note)
    {
      $this->Note = $Note;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceLanguage()
    {
      return $this->InvoiceLanguage;
    }

    /**
     * @param string $InvoiceLanguage
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setInvoiceLanguage($InvoiceLanguage)
    {
      $this->InvoiceLanguage = $InvoiceLanguage;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param CompanyType|string $Type
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->Username;
    }

    /**
     * @param string $Username
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setUsername($Username)
    {
      $this->Username = $Username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return \DateTime|bool|null
     */
    public function getIncorporationDate()
    {
      if ($this->IncorporationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->IncorporationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $IncorporationDate
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setIncorporationDate(\DateTime $IncorporationDate = null)
    {
      if ($IncorporationDate == null) {
       $this->IncorporationDate = null;
      } else {
        $this->IncorporationDate = $IncorporationDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime|bool|null
     */
    public function getDateCreated()
    {
      if ($this->DateCreated == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateCreated);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateCreated
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setDateCreated(\DateTime $DateCreated = null)
    {
      if ($DateCreated == null) {
       $this->DateCreated = null;
      } else {
        $this->DateCreated = $DateCreated->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param int $Status
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriceList()
    {
      return $this->PriceList;
    }

    /**
     * @param int $PriceList
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setPriceList($PriceList)
    {
      $this->PriceList = $PriceList;
      return $this;
    }

    /**
     * @return int
     */
    public function getOwner()
    {
      return $this->Owner;
    }

    /**
     * @param int $Owner
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setOwner($Owner)
    {
      $this->Owner = $Owner;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankAccountNo()
    {
      return $this->BankAccountNo;
    }

    /**
     * @param string $BankAccountNo
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setBankAccountNo($BankAccountNo)
    {
      $this->BankAccountNo = $BankAccountNo;
      return $this;
    }

    /**
     * @return int
     */
    public function getTermsOfDeliveryId()
    {
      return $this->TermsOfDeliveryId;
    }

    /**
     * @param int $TermsOfDeliveryId
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setTermsOfDeliveryId($TermsOfDeliveryId)
    {
      $this->TermsOfDeliveryId = $TermsOfDeliveryId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAccountDebit()
    {
      return $this->AccountDebit;
    }

    /**
     * @param int $AccountDebit
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setAccountDebit($AccountDebit)
    {
      $this->AccountDebit = $AccountDebit;
      return $this;
    }

    /**
     * @return int
     */
    public function getAccountCredit()
    {
      return $this->AccountCredit;
    }

    /**
     * @param int $AccountCredit
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setAccountCredit($AccountCredit)
    {
      $this->AccountCredit = $AccountCredit;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
      return $this->Discount;
    }

    /**
     * @param float $Discount
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setDiscount($Discount)
    {
      $this->Discount = $Discount;
      return $this;
    }

    /**
     * @return int
     */
    public function getTypeGroup()
    {
      return $this->TypeGroup;
    }

    /**
     * @param int $TypeGroup
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setTypeGroup($TypeGroup)
    {
      $this->TypeGroup = $TypeGroup;
      return $this;
    }

    /**
     * @return float
     */
    public function getShareCapital()
    {
      return $this->ShareCapital;
    }

    /**
     * @param float $ShareCapital
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setShareCapital($ShareCapital)
    {
      $this->ShareCapital = $ShareCapital;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfEmployees()
    {
      return $this->NumberOfEmployees;
    }

    /**
     * @param int $NumberOfEmployees
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setNumberOfEmployees($NumberOfEmployees)
    {
      $this->NumberOfEmployees = $NumberOfEmployees;
      return $this;
    }

    /**
     * @return float
     */
    public function getTurnover()
    {
      return $this->Turnover;
    }

    /**
     * @param float $Turnover
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setTurnover($Turnover)
    {
      $this->Turnover = $Turnover;
      return $this;
    }

    /**
     * @return float
     */
    public function getProfit()
    {
      return $this->Profit;
    }

    /**
     * @param float $Profit
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setProfit($Profit)
    {
      $this->Profit = $Profit;
      return $this;
    }

    /**
     * @return int
     */
    public function getIndustryId()
    {
      return $this->IndustryId;
    }

    /**
     * @param int $IndustryId
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setIndustryId($IndustryId)
    {
      $this->IndustryId = $IndustryId;
      return $this;
    }

    /**
     * @return int
     */
    public function getMemberNo()
    {
      return $this->MemberNo;
    }

    /**
     * @param int $MemberNo
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setMemberNo($MemberNo)
    {
      $this->MemberNo = $MemberNo;
      return $this;
    }

    /**
     * @return \DateTime|bool|null
     */
    public function getDateChanged()
    {
      if ($this->DateChanged == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateChanged);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateChanged
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setDateChanged(\DateTime $DateChanged = null)
    {
      if ($DateChanged == null) {
       $this->DateChanged = null;
      } else {
        $this->DateChanged = $DateChanged->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBlockInvoice()
    {
      return $this->BlockInvoice;
    }

    /**
     * @param boolean $BlockInvoice
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setBlockInvoice($BlockInvoice)
    {
      $this->BlockInvoice = $BlockInvoice;
      return $this;
    }

    /**
     * @return ArrayOfRelation
     */
    public function getRelations()
    {
      return $this->Relations;
    }

    /**
     * @param ArrayOfRelation $Relations
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setRelations($Relations)
    {
      $this->Relations = $Relations;
      return $this;
    }

    /**
     * @return ArrayOfCompanyMap
     */
    public function getMaps()
    {
      return $this->Maps;
    }

    /**
     * @param ArrayOfCompanyMap $Maps
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setMaps($Maps)
    {
      $this->Maps = $Maps;
      return $this;
    }

    /**
     * @return DistributionMethod
     */
    public function getDistributionMethod()
    {
      return $this->DistributionMethod;
    }

    /**
     * @param DistributionMethod $DistributionMethod
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setDistributionMethod($DistributionMethod)
    {
      $this->DistributionMethod = $DistributionMethod;
      return $this;
    }

    /**
     * @return CurrencyType
     */
    public function getCurrencyId()
    {
      return $this->CurrencyId;
    }

    /**
     * @param string $CurrencyId
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setCurrencyId($CurrencyId)
    {
      $this->CurrencyId = $CurrencyId;
      return $this;
    }

    /**
     * @return int
     */
    public function getPaymentTime()
    {
      return $this->PaymentTime;
    }

    /**
     * @param int $PaymentTime
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setPaymentTime($PaymentTime)
    {
      $this->PaymentTime = $PaymentTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getGlnNumber()
    {
      return $this->GlnNumber;
    }

    /**
     * @param string $GlnNumber
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setGlnNumber($GlnNumber)
    {
      $this->GlnNumber = $GlnNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFactoring()
    {
      return $this->Factoring;
    }

    /**
     * @param boolean $Factoring
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setFactoring($Factoring)
    {
      $this->Factoring = $Factoring;
      return $this;
    }

    /**
     * @return int
     */
    public function getLedgerCustomerAccount()
    {
      return $this->LedgerCustomerAccount;
    }

    /**
     * @param int $LedgerCustomerAccount
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setLedgerCustomerAccount($LedgerCustomerAccount)
    {
      $this->LedgerCustomerAccount = $LedgerCustomerAccount;
      return $this;
    }

    /**
     * @return int
     */
    public function getLedgerSupplierAccount()
    {
      return $this->LedgerSupplierAccount;
    }

    /**
     * @param int $LedgerSupplierAccount
     * @return \TwentyFourSeven\CompanyService\Company
     */
    public function setLedgerSupplierAccount($LedgerSupplierAccount)
    {
      $this->LedgerSupplierAccount = $LedgerSupplierAccount;
      return $this;
    }

}
