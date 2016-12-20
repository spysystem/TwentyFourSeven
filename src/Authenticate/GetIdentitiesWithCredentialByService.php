<?php

namespace TwentyFourSeven\Authenticate;

/**
 * Class GetIdentitiesWithCredentialByService
 *
 * @package TwentyFourSeven\Authenticate
 */
class GetIdentitiesWithCredentialByService
{

    /**
     * @var Credential $credential
     */
    protected $credential = null;

    /**
     * @var int $serviceId
     */
    protected $serviceId = null;

    /**
     * @param Credential $credential
     * @param int $serviceId
     */
    public function __construct($credential, $serviceId)
    {
      $this->credential = $credential;
      $this->serviceId = $serviceId;
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
     * @return \TwentyFourSeven\Authenticate\GetIdentitiesWithCredentialByService
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

    /**
     * @return int
     */
    public function getServiceId()
    {
      return $this->serviceId;
    }

    /**
     * @param int $serviceId
     * @return \TwentyFourSeven\Authenticate\GetIdentitiesWithCredentialByService
     */
    public function setServiceId($serviceId)
    {
      $this->serviceId = $serviceId;
      return $this;
    }

}
