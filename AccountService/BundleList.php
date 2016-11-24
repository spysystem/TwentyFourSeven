<?php

namespace TwentyFourSeven\AccountService;

class BundleList
{

    /**
     * @var guid $TaxMappingGroup
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
     * @var guid $sysAsyncLogId
     */
    protected $sysAsyncLogId = null;

    /**
     * @var string $sysAsyncLogDescription
     */
    protected $sysAsyncLogDescription = null;

    /**
     * @param guid $TaxMappingGroup
     * @param int $SaveOption
     * @param int $DefaultCustomerId
     * @param LogType $sysLog
     * @param guid $sysAsyncLogId
     */
    public function __construct($TaxMappingGroup, $SaveOption, $DefaultCustomerId, $sysLog, $sysAsyncLogId)
    {
      $this->TaxMappingGroup = $TaxMappingGroup;
      $this->SaveOption = $SaveOption;
      $this->DefaultCustomerId = $DefaultCustomerId;
      $this->sysLog = $sysLog;
      $this->sysAsyncLogId = $sysAsyncLogId;
    }

    /**
     * @return guid
     */
    public function getTaxMappingGroup()
    {
      return $this->TaxMappingGroup;
    }

    /**
     * @param guid $TaxMappingGroup
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
     * @return guid
     */
    public function getSysAsyncLogId()
    {
      return $this->sysAsyncLogId;
    }

    /**
     * @param guid $sysAsyncLogId
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
