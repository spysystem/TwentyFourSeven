<?php

namespace TwentyFourSeven\Authenticate;

/**
 * Class Credential
 *
 * @package TwentyFourSeven\Authenticate
 */
class Credential
{

    /**
     * @var string $ApplicationId
     */
    protected $ApplicationId = null;

    /**
     * @var string $IdentityId
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
	 * @param string $ApplicationId
	 * @param string $Username
	 * @param string $Password
	 * @param string $IdentityId
	 */
    public function __construct($ApplicationId, $Username = null, $Password = null, $IdentityId	= null)
    {
		$this->ApplicationId	= $ApplicationId;
		$this->Username			= $Username;
		$this->Password			= $Password;
		$this->IdentityId		= $IdentityId;
    }

    /**
     * @return string
     */
    public function getApplicationId()
    {
      return $this->ApplicationId;
    }

    /**
     * @param string $ApplicationId
     * @return \TwentyFourSeven\Authenticate\Credential
     */
    public function setApplicationId($ApplicationId)
    {
      $this->ApplicationId = $ApplicationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentityId()
    {
      return $this->IdentityId;
    }

    /**
     * @param string $IdentityId
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
