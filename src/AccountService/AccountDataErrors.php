<?php

namespace TwentyFourSeven\AccountService;

/**
 * Class AccountDataErrors
 *
 * @package TwentyFourSeven\AccountService
 */
class AccountDataErrors extends AccountData
{

    /**
     * @var ErrorType $Error
     */
    protected $Error = null;

    /**
     * @param int $AccountId
     * @param int $AccountNo
     * @param int $AccountTax
     * @param int $TaxNo
     * @param ErrorType $Error
     */
    public function __construct($AccountId, $AccountNo, $AccountTax, $TaxNo, $Error)
    {
      parent::__construct($AccountId, $AccountNo, $AccountTax, $TaxNo);
      $this->Error = $Error;
    }

    /**
     * @return ErrorType
     */
    public function getError()
    {
      return $this->Error;
    }

    /**
     * @param ErrorType $Error
     * @return \TwentyFourSeven\AccountService\AccountDataErrors
     */
    public function setError($Error)
    {
      $this->Error = $Error;
      return $this;
    }

}
