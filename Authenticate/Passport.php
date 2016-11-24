<?php

namespace TwentyFourSeven\Authenticate;

class Passport
{

    /**
     * @var guid $Id
     */
    protected $Id = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var ArrayOfIdentity $Identities
     */
    protected $Identities = null;

    /**
     * @var string $SessionId
     */
    protected $SessionId = null;

    /**
     * @param guid $Id
     */
    public function __construct($Id)
    {
      $this->Id = $Id;
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
     * @return \TwentyFourSeven\Authenticate\Passport
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \TwentyFourSeven\Authenticate\Passport
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return ArrayOfIdentity
     */
    public function getIdentities()
    {
      return $this->Identities;
    }

    /**
     * @param ArrayOfIdentity $Identities
     * @return \TwentyFourSeven\Authenticate\Passport
     */
    public function setIdentities($Identities)
    {
      $this->Identities = $Identities;
      return $this;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->SessionId;
    }

    /**
     * @param string $SessionId
     * @return \TwentyFourSeven\Authenticate\Passport
     */
    public function setSessionId($SessionId)
    {
      $this->SessionId = $SessionId;
      return $this;
    }

}
