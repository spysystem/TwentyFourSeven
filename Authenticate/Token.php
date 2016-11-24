<?php

namespace TwentyFourSeven\Authenticate;

class Token
{

    /**
     * @var guid $ApplicationId
     */
    protected $ApplicationId = null;

    /**
     * @var guid $Id
     */
    protected $Id = null;

    /**
     * @param guid $ApplicationId
     * @param guid $Id
     */
    public function __construct($ApplicationId, $Id)
    {
      $this->ApplicationId = $ApplicationId;
      $this->Id = $Id;
    }

    /**
     * @return guid
     */
    public function getApplicationId()
    {
      return $this->ApplicationId;
    }

    /**
     * @param guid $ApplicationId
     * @return \TwentyFourSeven\Authenticate\Token
     */
    public function setApplicationId($ApplicationId)
    {
      $this->ApplicationId = $ApplicationId;
      return $this;
    }

    /**
     * @return guid
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param guid $Id
     * @return \TwentyFourSeven\Authenticate\Token
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
