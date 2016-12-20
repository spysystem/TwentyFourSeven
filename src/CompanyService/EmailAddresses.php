<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class EmailAddresses
 *
 * @package TwentyFourSeven\CompanyService
 */
class EmailAddresses
{

    /**
     * @var EmailAddress $Home
     */
    protected $Home = null;

    /**
     * @var EmailAddress $Invoice
     */
    protected $Invoice = null;

    /**
     * @var EmailAddress $Primary
     */
    protected $Primary = null;

    /**
     * @var EmailAddress $Work
     */
    protected $Work = null;

    /**
     * @var EmailAddress $Alternative
     */
    protected $Alternative = null;


	/**
	 * EmailAddresses constructor.
	 */
	public function __construct()
    {
    
    }

    /**
     * @return EmailAddress
     */
    public function getHome()
    {
      return $this->Home;
    }

    /**
     * @param EmailAddress $Home
     * @return \TwentyFourSeven\CompanyService\EmailAddresses
     */
    public function setHome($Home)
    {
      $this->Home = $Home;
      return $this;
    }

    /**
     * @return EmailAddress
     */
    public function getInvoice()
    {
      return $this->Invoice;
    }

    /**
     * @param EmailAddress $Invoice
     * @return \TwentyFourSeven\CompanyService\EmailAddresses
     */
    public function setInvoice($Invoice)
    {
      $this->Invoice = $Invoice;
      return $this;
    }

    /**
     * @return EmailAddress
     */
    public function getPrimary()
    {
      return $this->Primary;
    }

    /**
     * @param EmailAddress $Primary
     * @return \TwentyFourSeven\CompanyService\EmailAddresses
     */
    public function setPrimary($Primary)
    {
      $this->Primary = $Primary;
      return $this;
    }

    /**
     * @return EmailAddress
     */
    public function getWork()
    {
      return $this->Work;
    }

    /**
     * @param EmailAddress $Work
     * @return \TwentyFourSeven\CompanyService\EmailAddresses
     */
    public function setWork($Work)
    {
      $this->Work = $Work;
      return $this;
    }

    /**
     * @return EmailAddress
     */
    public function getAlternative()
    {
      return $this->Alternative;
    }

    /**
     * @param EmailAddress $Alternative
     * @return \TwentyFourSeven\CompanyService\EmailAddresses
     */
    public function setAlternative($Alternative)
    {
      $this->Alternative = $Alternative;
      return $this;
    }

}
