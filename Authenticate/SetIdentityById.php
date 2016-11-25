<?php

namespace TwentyFourSeven\Authenticate;

/**
 * Class SetIdentityById
 *
 * @package TwentyFourSeven\Authenticate
 */
class SetIdentityById
{

    /**
     * @var string $identityId
     */
    protected $identityId = null;

    /**
     * @param string $identityId
     */
    public function __construct($identityId)
    {
      $this->identityId = $identityId;
    }

    /**
     * @return string
     */
    public function getIdentityId()
    {
      return $this->identityId;
    }

    /**
     * @param string $identityId
     * @return \TwentyFourSeven\Authenticate\SetIdentityById
     */
    public function setIdentityId($identityId)
    {
      $this->identityId = $identityId;
      return $this;
    }

}
