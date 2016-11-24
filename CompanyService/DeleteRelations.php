<?php

namespace TwentyFourSeven\CompanyService;

class DeleteRelations
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
     * @return \TwentyFourSeven\CompanyService\DeleteRelations
     */
    public function setRelations($relations)
    {
      $this->relations = $relations;
      return $this;
    }

}
