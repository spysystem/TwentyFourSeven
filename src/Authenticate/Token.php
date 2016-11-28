<?php

namespace TwentyFourSeven\Authenticate;

/**
 * Class Token
 *
 * @package TwentyFourSeven\Authenticate
 */
class Token
{

    /**
     * @var string $ApplicationId
     */
    protected $ApplicationId = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @param string $ApplicationId
     * @param string $Id
     */
    public function __construct($ApplicationId, $Id)
    {
      $this->ApplicationId = $ApplicationId;
      $this->Id = $Id;
    }

    /**
     * @return string
     */
    public function getApplicationId()
    {
      return $this->ApplicationId;
    }

    /**
     * @param string $ApplicationId
     * @return \TwentyFourSeven\Authenticate\Token
     */
    public function setApplicationId($ApplicationId)
    {
      $this->ApplicationId = $ApplicationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return \TwentyFourSeven\Authenticate\Token
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
