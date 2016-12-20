<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class DeleteMapsResponse
 *
 * @package TwentyFourSeven\CompanyService
 */
class DeleteMapsResponse
{

    /**
     * @var ArrayOfCompanyMap $DeleteMapsResult
     */
    protected $DeleteMapsResult = null;

    /**
     * @param ArrayOfCompanyMap $DeleteMapsResult
     */
    public function __construct($DeleteMapsResult)
    {
      $this->DeleteMapsResult = $DeleteMapsResult;
    }

    /**
     * @return ArrayOfCompanyMap
     */
    public function getDeleteMapsResult()
    {
      return $this->DeleteMapsResult;
    }

    /**
     * @param ArrayOfCompanyMap $DeleteMapsResult
     * @return \TwentyFourSeven\CompanyService\DeleteMapsResponse
     */
    public function setDeleteMapsResult($DeleteMapsResult)
    {
      $this->DeleteMapsResult = $DeleteMapsResult;
      return $this;
    }

}
