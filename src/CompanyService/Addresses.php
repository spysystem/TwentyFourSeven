<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class Addresses
 *
 * @package TwentyFourSeven\CompanyService
 */
class Addresses
{

    /**
     * @var Address $Post
     */
    protected $Post = null;

    /**
     * @var Address $Delivery
     */
    protected $Delivery = null;

    /**
     * @var Address $Visit
     */
    protected $Visit = null;

    /**
     * @var Address $Invoice
     */
    protected $Invoice = null;


	/**
	 * Addresses constructor.
	 */
	public function __construct()
    {
    
    }

    /**
     * @return Address
     */
    public function getPost()
    {
      return $this->Post;
    }

    /**
     * @param Address $Post
     * @return \TwentyFourSeven\CompanyService\Addresses
     */
    public function setPost($Post)
    {
      $this->Post = $Post;
      return $this;
    }

    /**
     * @return Address
     */
    public function getDelivery()
    {
      return $this->Delivery;
    }

    /**
     * @param Address $Delivery
     * @return \TwentyFourSeven\CompanyService\Addresses
     */
    public function setDelivery($Delivery)
    {
      $this->Delivery = $Delivery;
      return $this;
    }

    /**
     * @return Address
     */
    public function getVisit()
    {
      return $this->Visit;
    }

    /**
     * @param Address $Visit
     * @return \TwentyFourSeven\CompanyService\Addresses
     */
    public function setVisit($Visit)
    {
      $this->Visit = $Visit;
      return $this;
    }

    /**
     * @return Address
     */
    public function getInvoice()
    {
      return $this->Invoice;
    }

    /**
     * @param Address $Invoice
     * @return \TwentyFourSeven\CompanyService\Addresses
     */
    public function setInvoice($Invoice)
    {
      $this->Invoice = $Invoice;
      return $this;
    }

}
