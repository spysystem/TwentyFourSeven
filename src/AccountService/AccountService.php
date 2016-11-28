<?php
namespace TwentyFourSeven\AccountService;

use TwentyFourSeven\SoapClient;

/**
 * Class AccountService
 *
 * @package TwentyFourSeven\AccountService
 */
class AccountService extends SoapClient
{
	const	WSDLUrl			= 'https://webservices.24sevenoffice.com/Economy/Account/AccountService.asmx?WSDL';

    /**
     * @var array $arrClassMap The defined classes
     */
    protected static $arrClassMap = [
      'SaveBundleList' => 'TwentyFourSeven\\AccountService\\SaveBundleList',
      'BundleList' => 'TwentyFourSeven\\AccountService\\BundleList',
      'ArrayOfBundle' => 'TwentyFourSeven\\AccountService\\ArrayOfBundle',
      'Bundle' => 'TwentyFourSeven\\AccountService\\Bundle',
      'ArrayOfVoucher' => 'TwentyFourSeven\\AccountService\\ArrayOfVoucher',
      'Voucher' => 'TwentyFourSeven\\AccountService\\Voucher',
      'ArrayOfEntry' => 'TwentyFourSeven\\AccountService\\ArrayOfEntry',
      'Entry' => 'TwentyFourSeven\\AccountService\\Entry',
      'ArrayOfLinkModel' => 'TwentyFourSeven\\AccountService\\ArrayOfLinkModel',
      'LinkModel' => 'TwentyFourSeven\\AccountService\\LinkModel',
      'SaveBundleListResponse' => 'TwentyFourSeven\\AccountService\\SaveBundleListResponse',
      'saveRespons' => 'TwentyFourSeven\\AccountService\\saveRespons',
      'Authentication' => 'TwentyFourSeven\\AccountService\\Authentication',
      'GetEntryId' => 'TwentyFourSeven\\AccountService\\GetEntryId',
      'EntryId' => 'TwentyFourSeven\\AccountService\\EntryId',
      'GetEntryIdResponse' => 'TwentyFourSeven\\AccountService\\GetEntryIdResponse',
      'GetAccountList' => 'TwentyFourSeven\\AccountService\\GetAccountList',
      'GetAccountListResponse' => 'TwentyFourSeven\\AccountService\\GetAccountListResponse',
      'ArrayOfAccountData' => 'TwentyFourSeven\\AccountService\\ArrayOfAccountData',
      'AccountData' => 'TwentyFourSeven\\AccountService\\AccountData',
      'GetTypeList' => 'TwentyFourSeven\\AccountService\\GetTypeList',
      'GetTypeListResponse' => 'TwentyFourSeven\\AccountService\\GetTypeListResponse',
      'ArrayOfTypeData' => 'TwentyFourSeven\\AccountService\\ArrayOfTypeData',
      'TypeData' => 'TwentyFourSeven\\AccountService\\TypeData',
      'GetTaxMappingLists' => 'TwentyFourSeven\\AccountService\\GetTaxMappingLists',
      'GetTaxMappingListsResponse' => 'TwentyFourSeven\\AccountService\\GetTaxMappingListsResponse',
      'ArrayOfTaxMappingList' => 'TwentyFourSeven\\AccountService\\ArrayOfTaxMappingList',
      'TaxMappingList' => 'TwentyFourSeven\\AccountService\\TaxMappingList',
      'ArrayOfTaxMappingElements' => 'TwentyFourSeven\\AccountService\\ArrayOfTaxMappingElements',
      'TaxMappingElements' => 'TwentyFourSeven\\AccountService\\TaxMappingElements',
      'GetTaxCodeList' => 'TwentyFourSeven\\AccountService\\GetTaxCodeList',
      'GetTaxCodeListResponse' => 'TwentyFourSeven\\AccountService\\GetTaxCodeListResponse',
      'ArrayOfTaxCodeElement' => 'TwentyFourSeven\\AccountService\\ArrayOfTaxCodeElement',
      'TaxCodeElement' => 'TwentyFourSeven\\AccountService\\TaxCodeElement',
      'CheckAccountNo' => 'TwentyFourSeven\\AccountService\\CheckAccountNo',
      'CheckAccountNoResponse' => 'TwentyFourSeven\\AccountService\\CheckAccountNoResponse',
      'ArrayOfAccountDataErrors' => 'TwentyFourSeven\\AccountService\\ArrayOfAccountDataErrors',
      'AccountDataErrors' => 'TwentyFourSeven\\AccountService\\AccountDataErrors',
      'LogMessage' => 'TwentyFourSeven\\AccountService\\LogMessage',
      'LogMessageResponse' => 'TwentyFourSeven\\AccountService\\LogMessageResponse',
    ];

    /**
     * Saves a list of Account bundles to 24SO system
     *
     * @param SaveBundleList $parameters
     * @return SaveBundleListResponse
     */
    public function SaveBundleList(SaveBundleList $parameters)
    {
      return $this->__soapCall('SaveBundleList', [$parameters]);
    }

    /**
     * Get the next EntryId
     *
     * @param GetEntryId $parameters
     * @return GetEntryIdResponse
     */
    public function GetEntryId(GetEntryId $parameters)
    {
      return $this->__soapCall('GetEntryId', [$parameters]);
    }

    /**
     * Get a list of all accounts
     *
     * @param GetAccountList $parameters
     * @return GetAccountListResponse
     */
    public function GetAccountList(GetAccountList $parameters)
    {
      return $this->__soapCall('GetAccountList', [$parameters]);
    }

    /**
     * Get a list of existing types
     *
     * @param GetTypeList $parameters
     * @return GetTypeListResponse
     */
    public function GetTypeList(GetTypeList $parameters)
    {
      return $this->__soapCall('GetTypeList', [$parameters]);
    }

    /**
     * Gets all Tax mapping lists (Templates included)
     *
     * @param GetTaxMappingLists $parameters
     * @return GetTaxMappingListsResponse
     */
    public function GetTaxMappingLists(GetTaxMappingLists $parameters)
    {
      return $this->__soapCall('GetTaxMappingLists', [$parameters]);
    }

    /**
     * Gets the complete tax code list
     *
     * @param GetTaxCodeList $parameters
     * @return GetTaxCodeListResponse
     */
    public function GetTaxCodeList(GetTaxCodeList $parameters)
    {
      return $this->__soapCall('GetTaxCodeList', [$parameters]);
    }

    /**
     * Checks if accounts exists
     *
     * @param CheckAccountNo $parameters
     * @return CheckAccountNoResponse
     */
    public function CheckAccountNo(CheckAccountNo $parameters)
    {
      return $this->__soapCall('CheckAccountNo', [$parameters]);
    }

    /**
     * Testing the log mechanism
     *
     * @param LogMessage $parameters
     * @return LogMessageResponse
     */
    public function LogMessage(LogMessage $parameters)
    {
      return $this->__soapCall('LogMessage', [$parameters]);
    }

}
