<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class SaveRelationsResponse
 *
 * @package TwentyFourSeven\CompanyService
 */
class SaveRelationsResponse
{

    /**
     * @var ArrayOfRelation $SaveRelationsResult
     */
    protected $SaveRelationsResult = null;

    /**
     * @param ArrayOfRelation $SaveRelationsResult
     */
    public function __construct($SaveRelationsResult)
    {
      $this->SaveRelationsResult = $SaveRelationsResult;
    }

    /**
     * @return ArrayOfRelation
     */
    public function getSaveRelationsResult()
    {
      return $this->SaveRelationsResult;
    }

    /**
     * @param ArrayOfRelation $SaveRelationsResult
     * @return \TwentyFourSeven\CompanyService\SaveRelationsResponse
     */
    public function setSaveRelationsResult($SaveRelationsResult)
    {
      $this->SaveRelationsResult = $SaveRelationsResult;
      return $this;
    }

}
