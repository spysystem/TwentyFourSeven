<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class CompanySearchParameters
 *
 * @package TwentyFourSeven\CompanyService
 */
class CompanySearchParameters
{

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var \DateTime $ChangedAfter
     */
    protected $ChangedAfter = null;


	/**
	 * CompanySearchParameters constructor.
	 */
	public function __construct()
    {
    
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
     * @return \TwentyFourSeven\CompanyService\CompanySearchParameters
     */
    public function setCompanyId($CompanyId)
    {
      $this->CompanyId = $CompanyId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \TwentyFourSeven\CompanyService\CompanySearchParameters
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return \DateTime|bool|null
     */
    public function getChangedAfter()
    {
      if ($this->ChangedAfter == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ChangedAfter);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ChangedAfter
     * @return \TwentyFourSeven\CompanyService\CompanySearchParameters
     */
    public function setChangedAfter(\DateTime $ChangedAfter = null)
    {
      if ($ChangedAfter == null) {
       $this->ChangedAfter = null;
      } else {
        $this->ChangedAfter = $ChangedAfter->format(\DateTime::ATOM);
      }
      return $this;
    }

}
