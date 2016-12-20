<?php

namespace TwentyFourSeven\Authenticate;

/**
 * Class Server
 *
 * @package TwentyFourSeven\Authenticate
 */
class Server
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $Type
     */
    protected $Type = null;

    /**
     * @param int $Id
     * @param int $Type
     */
    public function __construct($Id, $Type)
    {
      $this->Id = $Id;
      $this->Type = $Type;
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
     * @return \TwentyFourSeven\Authenticate\Server
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param int $Type
     * @return \TwentyFourSeven\Authenticate\Server
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
