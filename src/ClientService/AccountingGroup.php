<?php

namespace TwentyFourSeven\ClientService;

/**
 * Class AccountingGroup
 *
 * @package TwentyFourSeven\ClientService
 */
class AccountingGroup
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param int $AccountId
     * @param int $Id
     */
    public function __construct($AccountId, $Id)
    {
      $this->AccountId = $AccountId;
      $this->Id = $Id;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->AccountId;
    }

    /**
     * @param int $AccountId
     * @return \TwentyFourSeven\ClientService\AccountingGroup
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
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
     * @return \TwentyFourSeven\ClientService\AccountingGroup
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
     * @return \TwentyFourSeven\ClientService\AccountingGroup
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
