<?php

namespace TwentyFourSeven\TransactionService;

/**
 * Class Dimension
 *
 * @package TwentyFourSeven\TransactionService
 */
class Dimension
{

    /**
     * @var DimensionType $Type
     */
    protected $Type = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @var float $Percent
     */
    protected $Percent = null;

    /**
     * @var int $TypeId
     */
    protected $TypeId = null;


	/**
	 * Dimension constructor.
	 */
	public function __construct()
    {
    
    }

    /**
     * @return DimensionType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param DimensionType $Type
     * @return \TwentyFourSeven\TransactionService\Dimension
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \TwentyFourSeven\TransactionService\Dimension
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \TwentyFourSeven\TransactionService\Dimension
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercent()
    {
      return $this->Percent;
    }

    /**
     * @param float $Percent
     * @return \TwentyFourSeven\TransactionService\Dimension
     */
    public function setPercent($Percent)
    {
      $this->Percent = $Percent;
      return $this;
    }

    /**
     * @return int
     */
    public function getTypeId()
    {
      return $this->TypeId;
    }

    /**
     * @param int $TypeId
     * @return \TwentyFourSeven\TransactionService\Dimension
     */
    public function setTypeId($TypeId)
    {
      $this->TypeId = $TypeId;
      return $this;
    }

}
