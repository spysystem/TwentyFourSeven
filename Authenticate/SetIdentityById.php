<?php

namespace TwentyFourSeven\Authenticate;

class SetIdentityById
{

    /**
     * @var guid $identityId
     */
    protected $identityId = null;

    /**
     * @param guid $identityId
     */
    public function __construct($identityId)
    {
      $this->identityId = $identityId;
    }

    /**
     * @return guid
     */
    public function getIdentityId()
    {
      return $this->identityId;
    }

    /**
     * @param guid $identityId
     * @return \TwentyFourSeven\Authenticate\SetIdentityById
     */
    public function setIdentityId($identityId)
    {
      $this->identityId = $identityId;
      return $this;
    }

}
