<?php

namespace TwentyFourSeven\Authenticate;

/**
 * Class SetIdentity
 *
 * @package TwentyFourSeven\Authenticate
 */
class SetIdentity
{

    /**
     * @var Identity $identity
     */
    protected $identity = null;

    /**
     * @param Identity $identity
     */
    public function __construct($identity)
    {
      $this->identity = $identity;
    }

    /**
     * @return Identity
     */
    public function getIdentity()
    {
      return $this->identity;
    }

    /**
     * @param Identity $identity
     * @return \TwentyFourSeven\Authenticate\SetIdentity
     */
    public function setIdentity($identity)
    {
      $this->identity = $identity;
      return $this;
    }

}
