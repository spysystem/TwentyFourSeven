<?php

namespace TwentyFourSeven\CompanyService;

use DateTime;
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
	 * @param string $strFromDate
	 *
	 * @return static
	 */
	public static function CreateForIdList(string $strFromDate)
	{
		$oSearchParameters	= new CompanySearchParameters();
		$oSearchParameters->setChangedAfter(DateTime::createFromFormat('Y-m-d', $strFromDate));

		$arrReturnParameters	= null;
		$arrReturnParameters = [
			'Id'
		];

		return new static($oSearchParameters, $arrReturnParameters);
	}

	/**
	 * @param string $strFromDate
	 *
	 * @return static
	 */
	public static function CreateForSearch(string $strFromDate)
	{
		$oSearchParameters	= new CompanySearchParameters();
		$oSearchParameters->setChangedAfter(DateTime::createFromFormat('Y-m-d', $strFromDate));

		$arrReturnParameters	= null;
		$arrReturnParameters = [
			'Id',
			'Name',
			'OrganizationNumber',
			'Type'
		];

		return new static($oSearchParameters, $arrReturnParameters);
	}

	/**
	 * @param CompanySearchParameters $oSearchParameters
	 * @param ArrayOfString|string[]  $arrReturnParameters
	 *
	 * note: Can't add type to $arrReturnParameters, since it can receive both an ArrayOfString, a normal array and null
	 */
	public function __construct(CompanySearchParameters $oSearchParameters, $arrReturnParameters = null)
	{
		# If no return parameter is defined, retrieve all them
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
