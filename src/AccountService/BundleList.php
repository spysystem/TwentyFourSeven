<?php

namespace TwentyFourSeven\AccountService;

/**
 * Class BundleList
 *
 * @package TwentyFourSeven\AccountService
 */
class BundleList
{
	const SaveOption_PostDirectly	= 0;
	const SaveOption_SaveAsBundle	= 1;

    /**
     * @var string $TaxMappingGroup
     */
    protected $TaxMappingGroup = null;

    /**
     * @var ArrayOfBundle $bundleList
     */
    protected $bundleList = null;

    /**
     * @var boolean $AllowDifference
     */
    protected $AllowDifference = null;

    /**
     * @var boolean $DirectLedger
     */
    protected $DirectLedger = null;

    /**
     * @var int $SaveOption
     */
    protected $SaveOption = null;

    /**
     * @var int $DefaultCustomerId
     */
    protected $DefaultCustomerId = null;

    /**
     * @var LogType $sysLog
     */
    protected $sysLog = null;

    /**
     * @var string $sysAsyncLogId
     */
    protected $sysAsyncLogId = null;

    /**
     * @var string $sysAsyncLogDescription
     */
    protected $sysAsyncLogDescription = null;

    /**
     * @param string $TaxMappingGroup
     * @param int $SaveOption
     * @param int $DefaultCustomerId
     * @param string $sysLog
     * @param string $sysAsyncLogId
     */
    public function __construct(
    	$TaxMappingGroup = '00000000-0000-0000-0000-000000000000',
		$SaveOption = self::SaveOption_SaveAsBundle,
		$DefaultCustomerId = 0,
		$sysLog	= LogType::none,
		$sysAsyncLogId = '00000000-0000-0000-0000-000000000000')
    {
      $this->TaxMappingGroup = $TaxMappingGroup;
      $this->SaveOption = $SaveOption;
      $this->DefaultCustomerId = $DefaultCustomerId;
      $this->sysLog = $sysLog;
      $this->sysAsyncLogId = $sysAsyncLogId;
    }

    /**
     * @return string
     */
    public function getTaxMappingGroup()
    {
      return $this->TaxMappingGroup;
    }

    /**
     * @param string $TaxMappingGroup
     * @return \TwentyFourSeven\AccountService\BundleList
     */
    public function setTaxMappingGroup($TaxMappingGroup)
    {
      $this->TaxMappingGroup = $TaxMappingGroup;
      return $this;
    }

    /**
     * @return ArrayOfBundle
     */
    public function getBundleList()
    {
      return $this->bundleList;
    }

    /**
     * @param ArrayOfBundle $bundleList
     * @return \TwentyFourSeven\AccountService\BundleList
     */
    public function setBundleList($bundleList)
    {
      $this->bundleList = $bundleList;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowDifference()
    {
      return $this->AllowDifference;
    }

    /**
     * @param boolean $AllowDifference
     * @return \TwentyFourSeven\AccountService\BundleList
     */
    public function setAllowDifference($AllowDifference)
    {
      $this->AllowDifference = $AllowDifference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDirectLedger()
    {
      return $this->DirectLedger;
    }

    /**
     * @param boolean $DirectLedger
     * @return \TwentyFourSeven\AccountService\BundleList
     */
    public function setDirectLedger($DirectLedger)
    {
      $this->DirectLedger = $DirectLedger;
      return $this;
    }

    /**
     * @return int
     */
    public function getSaveOption()
    {
      return $this->SaveOption;
    }

    /**
     * @param int $SaveOption
     * @return \TwentyFourSeven\AccountService\BundleList
     */
    public function setSaveOption($SaveOption)
    {
      $this->SaveOption = $SaveOption;
      return $this;
    }

    /**
     * @return int
     */
    public function getDefaultCustomerId()
    {
      return $this->DefaultCustomerId;
    }

    /**
     * @param int $DefaultCustomerId
     * @return \TwentyFourSeven\AccountService\BundleList
     */
    public function setDefaultCustomerId($DefaultCustomerId)
    {
      $this->DefaultCustomerId = $DefaultCustomerId;
      return $this;
    }

    /**
     * @return LogType
     */
    public function getSysLog()
    {
      return $this->sysLog;
    }

    /**
     * @param LogType $sysLog
     * @return \TwentyFourSeven\AccountService\BundleList
     */
    public function setSysLog($sysLog)
    {
      $this->sysLog = $sysLog;
      return $this;
    }

    /**
     * @return string
     */
    public function getSysAsyncLogId()
    {
      return $this->sysAsyncLogId;
    }

    /**
     * @param string $sysAsyncLogId
     * @return \TwentyFourSeven\AccountService\BundleList
     */
    public function setSysAsyncLogId($sysAsyncLogId)
    {
      $this->sysAsyncLogId = $sysAsyncLogId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSysAsyncLogDescription()
    {
      return $this->sysAsyncLogDescription;
    }

    /**
     * @param string $sysAsyncLogDescription
     * @return \TwentyFourSeven\AccountService\BundleList
     */
    public function setSysAsyncLogDescription($sysAsyncLogDescription)
    {
      $this->sysAsyncLogDescription = $sysAsyncLogDescription;
      return $this;
    }

}
