<?php

namespace TwentyFourSeven\Authenticate;

class Identity
{

    /**
     * @var guid $Id
     */
    protected $Id = null;

    /**
     * @var User $User
     */
    protected $User = null;

    /**
     * @var Client $Client
     */
    protected $Client = null;

    /**
     * @var boolean $IsCurrent
     */
    protected $IsCurrent = null;

    /**
     * @var boolean $IsDefault
     */
    protected $IsDefault = null;

    /**
     * @var boolean $IsProtected
     */
    protected $IsProtected = null;

    /**
     * @var ArrayOfServer $Servers
     */
    protected $Servers = null;

    /**
     * @var boolean $IsDisabled
     */
    protected $IsDisabled = null;

    /**
     * @param guid $Id
     * @param boolean $IsCurrent
     * @param boolean $IsDefault
     * @param boolean $IsProtected
     */
    public function __construct($Id, $IsCurrent, $IsDefault, $IsProtected)
    {
      $this->Id = $Id;
      $this->IsCurrent = $IsCurrent;
      $this->IsDefault = $IsDefault;
      $this->IsProtected = $IsProtected;
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
     * @return \TwentyFourSeven\Authenticate\Identity
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return User
     */
    public function getUser()
    {
      return $this->User;
    }

    /**
     * @param User $User
     * @return \TwentyFourSeven\Authenticate\Identity
     */
    public function setUser($User)
    {
      $this->User = $User;
      return $this;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
      return $this->Client;
    }

    /**
     * @param Client $Client
     * @return \TwentyFourSeven\Authenticate\Identity
     */
    public function setClient($Client)
    {
      $this->Client = $Client;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCurrent()
    {
      return $this->IsCurrent;
    }

    /**
     * @param boolean $IsCurrent
     * @return \TwentyFourSeven\Authenticate\Identity
     */
    public function setIsCurrent($IsCurrent)
    {
      $this->IsCurrent = $IsCurrent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDefault()
    {
      return $this->IsDefault;
    }

    /**
     * @param boolean $IsDefault
     * @return \TwentyFourSeven\Authenticate\Identity
     */
    public function setIsDefault($IsDefault)
    {
      $this->IsDefault = $IsDefault;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsProtected()
    {
      return $this->IsProtected;
    }

    /**
     * @param boolean $IsProtected
     * @return \TwentyFourSeven\Authenticate\Identity
     */
    public function setIsProtected($IsProtected)
    {
      $this->IsProtected = $IsProtected;
      return $this;
    }

    /**
     * @return ArrayOfServer
     */
    public function getServers()
    {
      return $this->Servers;
    }

    /**
     * @param ArrayOfServer $Servers
     * @return \TwentyFourSeven\Authenticate\Identity
     */
    public function setServers($Servers)
    {
      $this->Servers = $Servers;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDisabled()
    {
      return $this->IsDisabled;
    }

    /**
     * @param boolean $IsDisabled
     * @return \TwentyFourSeven\Authenticate\Identity
     */
    public function setIsDisabled($IsDisabled)
    {
      $this->IsDisabled = $IsDisabled;
      return $this;
    }

}
