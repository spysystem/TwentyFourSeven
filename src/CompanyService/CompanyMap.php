<?php

namespace TwentyFourSeven\CompanyService;

class CompanyMap
{

    /**
     * @var int $MapType
     */
    protected $MapType = null;

    /**
     * @var string $ExternalId
     */
    protected $ExternalId = null;

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @param int $MapType
     * @param int $CompanyId
     */
    public function __construct($MapType, $CompanyId)
    {
      $this->MapType = $MapType;
      $this->CompanyId = $CompanyId;
    }

    /**
     * @return int
     */
    public function getMapType()
    {
      return $this->MapType;
    }

    /**
     * @param int $MapType
     * @return \TwentyFourSeven\CompanyService\CompanyMap
     */
    public function setMapType($MapType)
    {
      $this->MapType = $MapType;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->ExternalId;
    }

    /**
     * @param string $ExternalId
     * @return \TwentyFourSeven\CompanyService\CompanyMap
     */
    public function setExternalId($ExternalId)
    {
      $this->ExternalId = $ExternalId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId()
    {
      return $this->CompanyId;
    }

    /**
     * @param int $CompanyId
     * @return \TwentyFourSeven\CompanyService\CompanyMap
     */
    public function setCompanyId($CompanyId)
    {
      $this->CompanyId = $CompanyId;
      return $this;
    }

}
