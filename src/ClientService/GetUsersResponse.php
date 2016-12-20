<?php

namespace TwentyFourSeven\ClientService;

/**
 * Class GetUsersResponse
 *
 * @package TwentyFourSeven\ClientService
 */
class GetUsersResponse
{

    /**
     * @var ArrayOfUser $GetUsersResult
     */
    protected $GetUsersResult = null;

    /**
     * @param ArrayOfUser $GetUsersResult
     */
    public function __construct($GetUsersResult)
    {
      $this->GetUsersResult = $GetUsersResult;
    }

    /**
     * @return ArrayOfUser
     */
    public function getGetUsersResult()
    {
      return $this->GetUsersResult;
    }

    /**
     * @param ArrayOfUser $GetUsersResult
     * @return \TwentyFourSeven\ClientService\GetUsersResponse
     */
    public function setGetUsersResult($GetUsersResult)
    {
      $this->GetUsersResult = $GetUsersResult;
      return $this;
    }

}
