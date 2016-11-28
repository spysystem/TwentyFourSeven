<?php

namespace TwentyFourSeven\CompanyService;

class SaveCustomerCategories
{

    /**
     * @var ArrayOfKeyValuePair $customerCategories
     */
    protected $customerCategories = null;

    /**
     * @param ArrayOfKeyValuePair $customerCategories
     */
    public function __construct($customerCategories)
    {
      $this->customerCategories = $customerCategories;
    }

    /**
     * @return ArrayOfKeyValuePair
     */
    public function getCustomerCategories()
    {
      return $this->customerCategories;
    }

    /**
     * @param ArrayOfKeyValuePair $customerCategories
     * @return \TwentyFourSeven\CompanyService\SaveCustomerCategories
     */
    public function setCustomerCategories($customerCategories)
    {
      $this->customerCategories = $customerCategories;
      return $this;
    }

}
