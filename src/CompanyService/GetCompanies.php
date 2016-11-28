<?php

namespace TwentyFourSeven\CompanyService;

class GetCompanies
{

    /**
     * @var CompanySearchParameters $searchParams
     */
    protected $searchParams = null;

    /**
     * @var ArrayOfString $returnProperties
     */
    protected $returnProperties = null;

    /**
     * @param CompanySearchParameters $searchParams
     * @param ArrayOfString $returnProperties
     */
    public function __construct($searchParams, $returnProperties)
    {
      $this->searchParams = $searchParams;
      $this->returnProperties = $returnProperties;
    }

    /**
     * @return CompanySearchParameters
     */
    public function getSearchParams()
    {
      return $this->searchParams;
    }

    /**
     * @param CompanySearchParameters $searchParams
     * @return \TwentyFourSeven\CompanyService\GetCompanies
     */
    public function setSearchParams($searchParams)
    {
      $this->searchParams = $searchParams;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getReturnProperties()
    {
      return $this->returnProperties;
    }

    /**
     * @param ArrayOfString $returnProperties
     * @return \TwentyFourSeven\CompanyService\GetCompanies
     */
    public function setReturnProperties($returnProperties)
    {
      $this->returnProperties = $returnProperties;
      return $this;
    }

}
