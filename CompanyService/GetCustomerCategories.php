<?php

namespace TwentyFourSeven\CompanyService;

class GetCustomerCategories
{

    /**
     * @var int $customerId
     */
    protected $customerId = null;

    /**
     * @param int $customerId
     */
    public function __construct($customerId)
    {
      $this->customerId = $customerId;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
      return $this->customerId;
    }

    /**
     * @param int $customerId
     * @return \TwentyFourSeven\CompanyService\GetCustomerCategories
     */
    public function setCustomerId($customerId)
    {
      $this->customerId = $customerId;
      return $this;
    }

}
