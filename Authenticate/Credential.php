<?php

namespace TwentyFourSeven\Authenticate;

class Credential
{

    /**
     * @var guid $ApplicationId
     */
    protected $ApplicationId = null;

    /**
     * @var guid $IdentityId
     */
    protected $IdentityId = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $Username
     */
    protected $Username = null;

    /**
     * @param guid $ApplicationId
     */
    public function __construct($ApplicationId)
    {
      $this->ApplicationId = $ApplicationId;
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
     * @return \TwentyFourSeven\Authenticate\Credential
     */
    public function setApplicationId($ApplicationId)
    {
      $this->ApplicationId = $ApplicationId;
      return $this;
    }

    /**
     * @return guid
     */
    public function getIdentityId()
    {
      return $this->IdentityId;
    }

    /**
     * @param guid $IdentityId
     * @return \TwentyFourSeven\Authenticate\Credential
     */
    public function setIdentityId($IdentityId)
    {
      $this->IdentityId = $IdentityId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \TwentyFourSeven\Authenticate\Credential
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->Username;
    }

    /**
     * @param string $Username
     * @return \TwentyFourSeven\Authenticate\Credential
     */
    public function setUsername($Username)
    {
      $this->Username = $Username;
      return $this;
    }

}
