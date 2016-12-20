<?php

namespace TwentyFourSeven\TransactionService;

/**
 * Class TransactionType
 *
 * @package TwentyFourSeven\TransactionService
 */
class TransactionType
{

    /**
     * @var boolean $Turnover
     */
    protected $Turnover = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var int $No
     */
    protected $No = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @param boolean $Turnover
     * @param int $No
     * @param int $Id
     */
    public function __construct($Turnover, $No, $Id)
    {
      $this->Turnover = $Turnover;
      $this->No = $No;
      $this->Id = $Id;
    }

    /**
     * @return boolean
     */
    public function getTurnover()
    {
      return $this->Turnover;
    }

    /**
     * @param boolean $Turnover
     * @return \TwentyFourSeven\TransactionService\TransactionType
     */
    public function setTurnover($Turnover)
    {
      $this->Turnover = $Turnover;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \TwentyFourSeven\TransactionService\TransactionType
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return int
     */
    public function getNo()
    {
      return $this->No;
    }

    /**
     * @param int $No
     * @return \TwentyFourSeven\TransactionService\TransactionType
     */
    public function setNo($No)
    {
      $this->No = $No;
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
     * @return \TwentyFourSeven\TransactionService\TransactionType
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
