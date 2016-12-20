<?php

namespace TwentyFourSeven\AccountService;

/**
 * Class saveRespons
 *
 * @package TwentyFourSeven\AccountService
 */
class saveRespons
{

    /**
     * @var ResponsType $Type
     */
    protected $Type = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param ResponsType $Type
     */
    public function __construct($Type)
    {
      $this->Type = $Type;
    }

    /**
     * @return ResponsType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ResponsType $Type
     * @return \TwentyFourSeven\AccountService\saveRespons
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \TwentyFourSeven\AccountService\saveRespons
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
