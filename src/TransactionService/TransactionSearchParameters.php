<?php

namespace TwentyFourSeven\TransactionService;

/**
 * Class TransactionSearchParameters
 *
 * @package TwentyFourSeven\TransactionService
 */
class TransactionSearchParameters
{

    /**
     * @var int $LinkId
     */
    protected $LinkId = null;

    /**
     * @var \DateTime $DateStart
     */
    protected $DateStart = null;

    /**
     * @var \DateTime $DateEnd
     */
    protected $DateEnd = null;

    /**
     * @var int $ProjectId
     */
    protected $ProjectId = null;

    /**
     * @var int $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var int $DepartmentId
     */
    protected $DepartmentId = null;

    /**
     * @var int $AccountNoStart
     */
    protected $AccountNoStart = null;

    /**
     * @var int $AccountNoEnd
     */
    protected $AccountNoEnd = null;

    /**
     * @var int $TransactionNoStart
     */
    protected $TransactionNoStart = null;

    /**
     * @var int $TransactionNoEnd
     */
    protected $TransactionNoEnd = null;

    /**
     * @var int $TransactionTypeId
     */
    protected $TransactionTypeId = null;

    /**
     * @var TransactionSystemType $SystemType
     */
    protected $SystemType = null;

    /**
     * @var \DateTime $RegisteredAfter
     */
    protected $RegisteredAfter = null;

    /**
     * @var boolean $HasInvoiceId
     */
    protected $HasInvoiceId = null;


	/**
	 * TransactionSearchParameters constructor.
	 */
	public function __construct()
    {
    
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
     * @return \TwentyFourSeven\TransactionService\TransactionSearchParameters
     */
    public function setLinkId($LinkId)
    {
      $this->LinkId = $LinkId;
      return $this;
    }

    /**
     * @return \DateTime|bool|null
     */
    public function getDateStart()
    {
      if ($this->DateStart == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateStart);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateStart
     * @return \TwentyFourSeven\TransactionService\TransactionSearchParameters
     */
    public function setDateStart(\DateTime $DateStart = null)
    {
      if ($DateStart == null) {
       $this->DateStart = null;
      } else {
        $this->DateStart = $DateStart->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime|bool|null
     */
    public function getDateEnd()
    {
      if ($this->DateEnd == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateEnd);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateEnd
     * @return \TwentyFourSeven\TransactionService\TransactionSearchParameters
     */
    public function setDateEnd(\DateTime $DateEnd = null)
    {
      if ($DateEnd == null) {
       $this->DateEnd = null;
      } else {
        $this->DateEnd = $DateEnd->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getProjectId()
    {
      return $this->ProjectId;
    }

    /**
     * @param int $ProjectId
     * @return \TwentyFourSeven\TransactionService\TransactionSearchParameters
     */
    public function setProjectId($ProjectId)
    {
      $this->ProjectId = $ProjectId;
      return $this;
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
     * @return \TwentyFourSeven\TransactionService\TransactionSearchParameters
     */
    public function setCustomerId($CustomerId)
    {
      $this->CustomerId = $CustomerId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDepartmentId()
    {
      return $this->DepartmentId;
    }

    /**
     * @param int $DepartmentId
     * @return \TwentyFourSeven\TransactionService\TransactionSearchParameters
     */
    public function setDepartmentId($DepartmentId)
    {
      $this->DepartmentId = $DepartmentId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAccountNoStart()
    {
      return $this->AccountNoStart;
    }

    /**
     * @param int $AccountNoStart
     * @return \TwentyFourSeven\TransactionService\TransactionSearchParameters
     */
    public function setAccountNoStart($AccountNoStart)
    {
      $this->AccountNoStart = $AccountNoStart;
      return $this;
    }

    /**
     * @return int
     */
    public function getAccountNoEnd()
    {
      return $this->AccountNoEnd;
    }

    /**
     * @param int $AccountNoEnd
     * @return \TwentyFourSeven\TransactionService\TransactionSearchParameters
     */
    public function setAccountNoEnd($AccountNoEnd)
    {
      $this->AccountNoEnd = $AccountNoEnd;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransactionNoStart()
    {
      return $this->TransactionNoStart;
    }

    /**
     * @param int $TransactionNoStart
     * @return \TwentyFourSeven\TransactionService\TransactionSearchParameters
     */
    public function setTransactionNoStart($TransactionNoStart)
    {
      $this->TransactionNoStart = $TransactionNoStart;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransactionNoEnd()
    {
      return $this->TransactionNoEnd;
    }

    /**
     * @param int $TransactionNoEnd
     * @return \TwentyFourSeven\TransactionService\TransactionSearchParameters
     */
    public function setTransactionNoEnd($TransactionNoEnd)
    {
      $this->TransactionNoEnd = $TransactionNoEnd;
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
     * @return \TwentyFourSeven\TransactionService\TransactionSearchParameters
     */
    public function setTransactionTypeId($TransactionTypeId)
    {
      $this->TransactionTypeId = $TransactionTypeId;
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
     * @return \TwentyFourSeven\TransactionService\TransactionSearchParameters
     */
    public function setSystemType($SystemType)
    {
      $this->SystemType = $SystemType;
      return $this;
    }

    /**
     * @return \DateTime|bool|null
     */
    public function getRegisteredAfter()
    {
      if ($this->RegisteredAfter == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RegisteredAfter);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RegisteredAfter
     * @return \TwentyFourSeven\TransactionService\TransactionSearchParameters
     */
    public function setRegisteredAfter(\DateTime $RegisteredAfter = null)
    {
      if ($RegisteredAfter == null) {
       $this->RegisteredAfter = null;
      } else {
        $this->RegisteredAfter = $RegisteredAfter->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasInvoiceId()
    {
      return $this->HasInvoiceId;
    }

    /**
     * @param boolean $HasInvoiceId
     * @return \TwentyFourSeven\TransactionService\TransactionSearchParameters
     */
    public function setHasInvoiceId($HasInvoiceId)
    {
      $this->HasInvoiceId = $HasInvoiceId;
      return $this;
    }

}
