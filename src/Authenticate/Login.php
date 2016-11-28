<?php

namespace TwentyFourSeven\Authenticate;

class Login
{

    /**
     * @var Credential $credential
     */
    protected $credential = null;

    /**
     * @param Credential $credential
     */
    public function __construct($credential)
    {
      $this->credential = $credential;
    }

    /**
     * @return Credential
     */
    public function getCredential()
    {
      return $this->credential;
    }

    /**
     * @param Credential $credential
     * @return \TwentyFourSeven\Authenticate\Login
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

}
