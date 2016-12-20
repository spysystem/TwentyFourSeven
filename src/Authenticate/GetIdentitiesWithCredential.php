<?php

namespace TwentyFourSeven\Authenticate;

/**
 * Class GetIdentitiesWithCredential
 *
 * @package TwentyFourSeven\Authenticate
 */
class GetIdentitiesWithCredential
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
     * @return \TwentyFourSeven\Authenticate\GetIdentitiesWithCredential
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

}
