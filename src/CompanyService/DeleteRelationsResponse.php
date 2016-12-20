<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class DeleteRelationsResponse
 *
 * @package TwentyFourSeven\CompanyService
 */
class DeleteRelationsResponse
{

    /**
     * @var ArrayOfRelation $DeleteRelationsResult
     */
    protected $DeleteRelationsResult = null;

    /**
     * @param ArrayOfRelation $DeleteRelationsResult
     */
    public function __construct($DeleteRelationsResult)
    {
      $this->DeleteRelationsResult = $DeleteRelationsResult;
    }

    /**
     * @return ArrayOfRelation
     */
    public function getDeleteRelationsResult()
    {
      return $this->DeleteRelationsResult;
    }

    /**
     * @param ArrayOfRelation $DeleteRelationsResult
     * @return \TwentyFourSeven\CompanyService\DeleteRelationsResponse
     */
    public function setDeleteRelationsResult($DeleteRelationsResult)
    {
      $this->DeleteRelationsResult = $DeleteRelationsResult;
      return $this;
    }

}
