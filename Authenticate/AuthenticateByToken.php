<?php

namespace TwentyFourSeven\Authenticate;

class AuthenticateByToken
{

    /**
     * @var string $token
     */
    protected $token = null;

    /**
     * @param string $token
     */
    public function __construct($token)
    {
      $this->token = $token;
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->token;
    }

    /**
     * @param string $token
     * @return \TwentyFourSeven\Authenticate\AuthenticateByToken
     */
    public function setToken($token)
    {
      $this->token = $token;
      return $this;
    }

}
