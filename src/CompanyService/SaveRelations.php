<?php

namespace TwentyFourSeven\CompanyService;

/**
 * Class SaveRelations
 *
 * @package TwentyFourSeven\CompanyService
 */
class SaveRelations
{

    /**
     * @var ArrayOfRelation $relations
     */
    protected $relations = null;

    /**
     * @param ArrayOfRelation $relations
     */
    public function __construct($relations)
    {
      $this->relations = $relations;
    }

    /**
     * @return ArrayOfRelation
     */
    public function getRelations()
    {
      return $this->relations;
    }

    /**
     * @param ArrayOfRelation $relations
     * @return \TwentyFourSeven\CompanyService\SaveRelations
     */
    public function setRelations($relations)
    {
      $this->relations = $relations;
      return $this;
    }

}
