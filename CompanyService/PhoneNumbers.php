<?php

namespace TwentyFourSeven\CompanyService;

class PhoneNumbers
{

    /**
     * @var PhoneNumber $Home
     */
    protected $Home = null;

    /**
     * @var PhoneNumber $Fax
     */
    protected $Fax = null;

    /**
     * @var PhoneNumber $Mobile
     */
    protected $Mobile = null;

    /**
     * @var PhoneNumber $Primary
     */
    protected $Primary = null;

    /**
     * @var PhoneNumber $Work
     */
    protected $Work = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PhoneNumber
     */
    public function getHome()
    {
      return $this->Home;
    }

    /**
     * @param PhoneNumber $Home
     * @return \TwentyFourSeven\CompanyService\PhoneNumbers
     */
    public function setHome($Home)
    {
      $this->Home = $Home;
      return $this;
    }

    /**
     * @return PhoneNumber
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param PhoneNumber $Fax
     * @return \TwentyFourSeven\CompanyService\PhoneNumbers
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
      return $this;
    }

    /**
     * @return PhoneNumber
     */
    public function getMobile()
    {
      return $this->Mobile;
    }

    /**
     * @param PhoneNumber $Mobile
     * @return \TwentyFourSeven\CompanyService\PhoneNumbers
     */
    public function setMobile($Mobile)
    {
      $this->Mobile = $Mobile;
      return $this;
    }

    /**
     * @return PhoneNumber
     */
    public function getPrimary()
    {
      return $this->Primary;
    }

    /**
     * @param PhoneNumber $Primary
     * @return \TwentyFourSeven\CompanyService\PhoneNumbers
     */
    public function setPrimary($Primary)
    {
      $this->Primary = $Primary;
      return $this;
    }

    /**
     * @return PhoneNumber
     */
    public function getWork()
    {
      return $this->Work;
    }

    /**
     * @param PhoneNumber $Work
     * @return \TwentyFourSeven\CompanyService\PhoneNumbers
     */
    public function setWork($Work)
    {
      $this->Work = $Work;
      return $this;
    }

}
