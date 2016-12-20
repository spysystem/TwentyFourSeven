<?php

namespace TwentyFourSeven\AccountService;

/**
 * Class Authentication
 *
 * @package TwentyFourSeven\AccountService
 */
class Authentication
{

    /**
     * @var string $Username
     */
    protected $Username = null;

    /**
     * @var string $Password
     */
    protected $Password = null;


	/**
	 * Authentication constructor.
	 */
	public function __construct()
    {
    
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
     * @return \TwentyFourSeven\AccountService\Authentication
     */
    public function setUsername($Username)
    {
      $this->Username = $Username;
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
     * @return \TwentyFourSeven\AccountService\Authentication
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

}
