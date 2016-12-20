<?php

namespace TwentyFourSeven\TransactionService;

/**
 * Class Transaction
 *
 * @package TwentyFourSeven\TransactionService
 */
class Transaction
{

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var float $CurrencyRate
     */
    protected $CurrencyRate = null;

    /**
     * @var int $CurrencyUnit
     */
    protected $CurrencyUnit = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var int $StampNo
     */
    protected $StampNo = null;

    /**
     * @var int $Period
     */
    protected $Period = null;

    /**
     * @var int $TransactionTypeId
     */
    protected $TransactionTypeId = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var int $TransactionNo
     */
    protected $TransactionNo = null;

    /**
     * @var int $VatCode
     */
    protected $VatCode = null;

    /**
     * @var string $Id (guid)
     */
    protected $Id = null;

    /**
     * @var int $LinkId
     */
    protected $LinkId = null;

    /**
     * @var string $InvoiceNo
     */
    protected $InvoiceNo = null;

    /**
     * @var int $SequenceNo
     */
    protected $SequenceNo = null;

    /**
     * @var TransactionSystemType $SystemType
     */
    protected $SystemType = null;

    /**
     * @var \DateTime $DueDate
     */
    protected $DueDate = null;

    /**
     * @var ArrayOfDimension $Dimensions
     */
    protected $Dimensions = null;

    /**
     * @var \DateTime $RegistrationDate
     */
    protected $RegistrationDate = null;


	/**
	 * Transaction constructor.
	 */
	public function __construct()
    {
    
    }

    /**
     * @return \DateTime|bool|null
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
     * @return \TwentyFourSeven\TransactionService\Transaction
     */
    public function setDate(\DateTime $Date = null)
    {
      if ($Date == null) {
       $this->Date = null;
      } else {
        $this->Date = $Date->format(\DateTime::ATOM);
      }
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
     * @return \TwentyFourSeven\TransactionService\Transaction
     */
    public function setAccountNo($AccountNo)
    {
      $this->AccountNo = $AccountNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return \TwentyFourSeven\TransactionService\Transaction
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
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
     * @return \TwentyFourSeven\TransactionService\Transaction
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
     * @return \TwentyFourSeven\TransactionService\Transaction
     */
    public function setCurrencyUnit($CurrencyUnit)
    {
      $this->CurrencyUnit = $CurrencyUnit;
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
     * @return \TwentyFourSeven\TransactionService\Transaction
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
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
     * @return \TwentyFourSeven\TransactionService\Transaction
     */
    public function setStampNo($StampNo)
    {
      $this->StampNo = $StampNo;
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
     * @return \TwentyFourSeven\TransactionService\Transaction
     */
    public function setPeriod($Period)
    {
      $this->Period = $Period;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransactionTypeId()
    {
      return $this->TransactionTypeId;
    }

    /**
     * @param int $TransactionTypeId
     * @return \TwentyFourSeven\TransactionService\Transaction
     */
    public function setTransactionTypeId($TransactionTypeId)
    {
      $this->TransactionTypeId = $TransactionTypeId;
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
     * @return \TwentyFourSeven\TransactionService\Transaction
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransactionNo()
    {
      return $this->TransactionNo;
    }

    /**
     * @param int $TransactionNo
     * @return \TwentyFourSeven\TransactionService\Transaction
     */
    public function setTransactionNo($TransactionNo)
    {
      $this->TransactionNo = $TransactionNo;
      return $this;
    }

    /**
     * @return int
     */
    public function getVatCode()
    {
      return $this->VatCode;
    }

    /**
     * @param int $VatCode
     * @return \TwentyFourSeven\TransactionService\Transaction
     */
    public function setVatCode($VatCode)
    {
      $this->VatCode = $VatCode;
      return $this;
    }

    /**
     * @return string (guid)
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param string $Id (guid)
     * @return \TwentyFourSeven\TransactionService\Transaction
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return int
     */
    public function getLinkId()
    {
      return $this->LinkId;
    }

    /**
     * @param int $LinkId
     * @return \TwentyFourSeven\TransactionService\Transaction
     */
    public function setLinkId($LinkId)
    {
      $this->LinkId = $LinkId;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNo()
    {
      return $this->InvoiceNo;
    }

    /**
     * @param string $InvoiceNo
     * @return \TwentyFourSeven\TransactionService\Transaction
     */
    public function setInvoiceNo($InvoiceNo)
    {
      $this->InvoiceNo = $InvoiceNo;
      return $this;
    }

    /**
     * @return int
     */
    public function getSequenceNo()
    {
      return $this->SequenceNo;
    }

    /**
     * @param int $SequenceNo
     * @return \TwentyFourSeven\TransactionService\Transaction
     */
    public function setSequenceNo($SequenceNo)
    {
      $this->SequenceNo = $SequenceNo;
      return $this;
    }

    /**
     * @return TransactionSystemType
     */
    public function getSystemType()
    {
      return $this->SystemType;
    }

    /**
     * @param TransactionSystemType $SystemType
     * @return \TwentyFourSeven\TransactionService\Transaction
     */
    public function setSystemType($SystemType)
    {
      $this->SystemType = $SystemType;
      return $this;
    }

    /**
     * @return \DateTime|bool|null
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
     * @return \TwentyFourSeven\TransactionService\Transaction
     */
    public function setDueDate(\DateTime $DueDate = null)
    {
      if ($DueDate == null) {
       $this->DueDate = null;
      } else {
        $this->DueDate = $DueDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfDimension
     */
    public function getDimensions()
    {
      return $this->Dimensions;
    }

    /**
     * @param ArrayOfDimension $Dimensions
     * @return \TwentyFourSeven\TransactionService\Transaction
     */
    public function setDimensions($Dimensions)
    {
      $this->Dimensions = $Dimensions;
      return $this;
    }

    /**
     * @return \DateTime|bool|null
     */
    public function getRegistrationDate()
    {
      if ($this->RegistrationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RegistrationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RegistrationDate
     * @return \TwentyFourSeven\TransactionService\Transaction
     */
    public function setRegistrationDate(\DateTime $RegistrationDate = null)
    {
      if ($RegistrationDate == null) {
       $this->RegistrationDate = null;
      } else {
        $this->RegistrationDate = $RegistrationDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
