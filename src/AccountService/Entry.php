<?php

namespace TwentyFourSeven\AccountService;

/**
 * Class Entry
 *
 * @package TwentyFourSeven\AccountService
 */
class Entry
{

    /**
     * @var int $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var \DateTime $DueDate
     */
    protected $DueDate = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $CurrencyId
     */
    protected $CurrencyId = null;

    /**
     * @var float $CurrencyRate
     */
    protected $CurrencyRate = null;

    /**
     * @var int $CurrencyUnit
     */
    protected $CurrencyUnit = null;

    /**
     * @var int $Department
     */
    protected $Department = null;

    /**
     * @var int $Project
     */
    protected $Project = null;

    /**
     * @var string $InvoiceReferenceNo
     */
    protected $InvoiceReferenceNo = null;

    /**
     * @var string $InvoiceKID
     */
    protected $InvoiceKID = null;

    /**
     * @var string $TaxNo
     */
    protected $TaxNo = null;

    /**
     * @var int $Period
     */
    protected $Period = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var int $StampNo
     */
    protected $StampNo = null;

    /**
     * @var string $BankAccountNo
     */
    protected $BankAccountNo = null;

    /**
     * @var string $LinkId
     */
    protected $LinkId = null;

    /**
     * @var ArrayOfLinkModel $Links
     */
    protected $Links = null;

    /**
     * @param int $CustomerId
     * @param int $AccountNo
     * @param \DateTime $Date
     * @param \DateTime $DueDate
     * @param float $Amount
     * @param float $CurrencyRate
     * @param int $CurrencyUnit
     * @param int $Department
     * @param int $Project
     * @param int $Period
     * @param int $StampNo
     */
    public function __construct($CustomerId, $AccountNo, \DateTime $Date, \DateTime $DueDate, $Amount, $CurrencyRate, $CurrencyUnit = 1, $Department = 0, $Project = 0, $Period = 0, $StampNo = 0)
    {
      $this->CustomerId = $CustomerId;
      $this->AccountNo = $AccountNo;
      $this->Date = $Date->format(\DateTime::ATOM);
      $this->DueDate = $DueDate->format(\DateTime::ATOM);
      $this->Amount = $Amount;
      $this->CurrencyRate = $CurrencyRate;
      $this->CurrencyUnit = $CurrencyUnit;
      $this->Department = $Department;
      $this->Project = $Project;
      $this->Period = $Period;
      $this->StampNo = $StampNo;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
      return $this->CustomerId;
    }

    /**
     * @param int $CustomerId
     * @return \TwentyFourSeven\AccountService\Entry
     */
    public function setCustomerId($CustomerId)
    {
      $this->CustomerId = $CustomerId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAccountNo()
    {
      return $this->AccountNo;
    }

    /**
     * @param int $AccountNo
     * @return \TwentyFourSeven\AccountService\Entry
     */
    public function setAccountNo($AccountNo)
    {
      $this->AccountNo = $AccountNo;
      return $this;
    }

    /**
     * @return \DateTime|null|bool
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return \TwentyFourSeven\AccountService\Entry
     */
    public function setDate(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime|null|bool
     */
    public function getDueDate()
    {
      if ($this->DueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DueDate
     * @return \TwentyFourSeven\AccountService\Entry
     */
    public function setDueDate(\DateTime $DueDate)
    {
      $this->DueDate = $DueDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \TwentyFourSeven\AccountService\Entry
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyId()
    {
      return $this->CurrencyId;
    }

    /**
     * @param string $CurrencyId
     * @return \TwentyFourSeven\AccountService\Entry
     */
    public function setCurrencyId($CurrencyId)
    {
      $this->CurrencyId = $CurrencyId;
      return $this;
    }

    /**
     * @return float
     */
    public function getCurrencyRate()
    {
      return $this->CurrencyRate;
    }

    /**
     * @param float $CurrencyRate
     * @return \TwentyFourSeven\AccountService\Entry
     */
    public function setCurrencyRate($CurrencyRate)
    {
      $this->CurrencyRate = $CurrencyRate;
      return $this;
    }

    /**
     * @return int
     */
    public function getCurrencyUnit()
    {
      return $this->CurrencyUnit;
    }

    /**
     * @param int $CurrencyUnit
     * @return \TwentyFourSeven\AccountService\Entry
     */
    public function setCurrencyUnit($CurrencyUnit)
    {
      $this->CurrencyUnit = $CurrencyUnit;
      return $this;
    }

    /**
     * @return int
     */
    public function getDepartment()
    {
      return $this->Department;
    }

    /**
     * @param int $Department
     * @return \TwentyFourSeven\AccountService\Entry
     */
    public function setDepartment($Department)
    {
      $this->Department = $Department;
      return $this;
    }

    /**
     * @return int
     */
    public function getProject()
    {
      return $this->Project;
    }

    /**
     * @param int $Project
     * @return \TwentyFourSeven\AccountService\Entry
     */
    public function setProject($Project)
    {
      $this->Project = $Project;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceReferenceNo()
    {
      return $this->InvoiceReferenceNo;
    }

    /**
     * @param string $InvoiceReferenceNo
     * @return \TwentyFourSeven\AccountService\Entry
     */
    public function setInvoiceReferenceNo($InvoiceReferenceNo)
    {
      $this->InvoiceReferenceNo = $InvoiceReferenceNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceKID()
    {
      return $this->InvoiceKID;
    }

    /**
     * @param string $InvoiceKID
     * @return \TwentyFourSeven\AccountService\Entry
     */
    public function setInvoiceKID($InvoiceKID)
    {
      $this->InvoiceKID = $InvoiceKID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxNo()
    {
      return $this->TaxNo;
    }

    /**
     * @param string $TaxNo
     * @return \TwentyFourSeven\AccountService\Entry
     */
    public function setTaxNo($TaxNo)
    {
      $this->TaxNo = $TaxNo;
      return $this;
    }

    /**
     * @return int
     */
    public function getPeriod()
    {
      return $this->Period;
    }

    /**
     * @param int $Period
     * @return \TwentyFourSeven\AccountService\Entry
     */
    public function setPeriod($Period)
    {
      $this->Period = $Period;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return \TwentyFourSeven\AccountService\Entry
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return int
     */
    public function getStampNo()
    {
      return $this->StampNo;
    }

    /**
     * @param int $StampNo
     * @return \TwentyFourSeven\AccountService\Entry
     */
    public function setStampNo($StampNo)
    {
      $this->StampNo = $StampNo;
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
     * @return \TwentyFourSeven\AccountService\Entry
     */
    public function setBankAccountNo($BankAccountNo)
    {
      $this->BankAccountNo = $BankAccountNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getLinkId()
    {
      return $this->LinkId;
    }

    /**
     * @param string $LinkId
     * @return \TwentyFourSeven\AccountService\Entry
     */
    public function setLinkId($LinkId)
    {
      $this->LinkId = $LinkId;
      return $this;
    }

    /**
     * @return ArrayOfLinkModel
     */
    public function getLinks()
    {
      return $this->Links;
    }

    /**
     * @param ArrayOfLinkModel $Links
     * @return \TwentyFourSeven\AccountService\Entry
     */
    public function setLinks($Links)
    {
      $this->Links = $Links;
      return $this;
    }

}
