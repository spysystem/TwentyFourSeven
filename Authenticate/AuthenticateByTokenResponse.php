<?php

namespace TwentyFourSeven\Authenticate;

class AuthenticateByTokenResponse
{

    /**
     * @var Passport $AuthenticateByTokenResult
     */
    protected $AuthenticateByTokenResult = null;

    /**
     * @param Passport $AuthenticateByTokenResult
     */
    public function __construct($AuthenticateByTokenResult)
    {
      $this->AuthenticateByTokenResult = $AuthenticateByTokenResult;
    }

    /**
     * @return Passport
     */
    public function getAuthenticateByTokenResult()
    {
      return $this->AuthenticateByTokenResult;
    }

    /**
     * @param Passport $AuthenticateByTokenResult
     * @return \TwentyFourSeven\Authenticate\AuthenticateByTokenResponse
     */
    public function setAuthenticateByTokenResult($AuthenticateByTokenResult)
    {
      $this->AuthenticateByTokenResult = $AuthenticateByTokenResult;
      return $this;
    }

}
