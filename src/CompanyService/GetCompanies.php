<?php

namespace TwentyFourSeven\CompanyService;

use ReflectionClass;

/**
 * Class GetCompanies
 *
 * @package TwentyFourSeven\CompanyService
 */
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
	 * @param CompanySearchParameters $oSearchParameters
	 * @param ArrayOfString           $arrReturnParameters
	 *
	 * note: Can't add type to $arrReturnParameters, since it can receive both an ArrayOfString, a normal array and null
	 */
	public function __construct(CompanySearchParameters $oSearchParameters, $arrReturnParameters = null)
	{
		if ($arrReturnParameters === null)
		{
			$arrReturnParameters = [];
			$oReflect            = new ReflectionClass(Company::class);

			foreach ($oReflect->getProperties() as $oProperty)
			{
				$arrReturnParameters[] = $oProperty->getName();
			}
		}
		$this->searchParams		= $oSearchParameters;
		$this->returnProperties	= $arrReturnParameters;
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
