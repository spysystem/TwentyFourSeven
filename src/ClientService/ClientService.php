<?php

namespace TwentyFourSeven\ClientService;

use TwentyFourSeven\SoapClient;

/**
 * Class ClientService
 *
 * @package TwentyFourSeven\ClientService
 */
class ClientService extends SoapClient
{
	const	WSDLUrl			= 'https://api.24sevenoffice.com/Client/V001/ClientService.asmx?WSDL';

    /**
     * @var array $arrClassMap The defined classes
     */
    protected static $arrClassMap = [
      'GetUsers' => 'TwentyFourSeven\\ClientService\\GetUsers',
      'GetUsersResponse' => 'TwentyFourSeven\\ClientService\\GetUsersResponse',
      'ArrayOfUser' => 'TwentyFourSeven\\ClientService\\ArrayOfUser',
      'User' => 'TwentyFourSeven\\ClientService\\User',
      'GetClientInformation' => 'TwentyFourSeven\\ClientService\\GetClientInformation',
      'GetClientInformationResponse' => 'TwentyFourSeven\\ClientService\\GetClientInformationResponse',
      'Client' => 'TwentyFourSeven\\ClientService\\Client',
      'Addresses' => 'TwentyFourSeven\\ClientService\\Addresses',
      'Address' => 'TwentyFourSeven\\ClientService\\Address',
      'EmailAddresses' => 'TwentyFourSeven\\ClientService\\EmailAddresses',
      'EmailAddress' => 'TwentyFourSeven\\ClientService\\EmailAddress',
      'ArrayOfFaxNumber' => 'TwentyFourSeven\\ClientService\\ArrayOfFaxNumber',
      'FaxNumber' => 'TwentyFourSeven\\ClientService\\FaxNumber',
      'PhoneNumbers' => 'TwentyFourSeven\\ClientService\\PhoneNumbers',
      'PhoneNumber' => 'TwentyFourSeven\\ClientService\\PhoneNumber',
      'GetDepartmentList' => 'TwentyFourSeven\\ClientService\\GetDepartmentList',
      'GetDepartmentListResponse' => 'TwentyFourSeven\\ClientService\\GetDepartmentListResponse',
      'ArrayOfDepartment' => 'TwentyFourSeven\\ClientService\\ArrayOfDepartment',
      'Department' => 'TwentyFourSeven\\ClientService\\Department',
      'GetCurrencyList' => 'TwentyFourSeven\\ClientService\\GetCurrencyList',
      'GetCurrencyListResponse' => 'TwentyFourSeven\\ClientService\\GetCurrencyListResponse',
      'ArrayOfCurrency' => 'TwentyFourSeven\\ClientService\\ArrayOfCurrency',
      'Currency' => 'TwentyFourSeven\\ClientService\\Currency',
      'GetTypeGroupList' => 'TwentyFourSeven\\ClientService\\GetTypeGroupList',
      'GetTypeGroupListResponse' => 'TwentyFourSeven\\ClientService\\GetTypeGroupListResponse',
      'ArrayOfAccountingGroup' => 'TwentyFourSeven\\ClientService\\ArrayOfAccountingGroup',
      'AccountingGroup' => 'TwentyFourSeven\\ClientService\\AccountingGroup',
      'GetVatTypeList' => 'TwentyFourSeven\\ClientService\\GetVatTypeList',
      'GetVatTypeListResponse' => 'TwentyFourSeven\\ClientService\\GetVatTypeListResponse',
      'ArrayOfVatType' => 'TwentyFourSeven\\ClientService\\ArrayOfVatType',
      'VatType' => 'TwentyFourSeven\\ClientService\\VatType',
    ];

    /**
     * Returns a list of users of the currently logged in client.
     *
     * @param GetUsers $parameters
     * @return GetUsersResponse
     */
    public function GetUsers(GetUsers $parameters)
    {
      return $this->__soapCall('GetUsers', [$parameters]);
    }

    /**
     * Get 24SevenOffice's client data for the client logged in
     *
     * @param GetClientInformation $parameters
     * @return GetClientInformationResponse
     */
    public function GetClientInformation(GetClientInformation $parameters)
    {
      return $this->__soapCall('GetClientInformation', [$parameters]);
    }

    /**
     * Returns the list of departments
     *
     * @param GetDepartmentList $parameters
     * @return GetDepartmentListResponse
     */
    public function GetDepartmentList(GetDepartmentList $parameters)
    {
      return $this->__soapCall('GetDepartmentList', [$parameters]);
    }

    /**
     * Gets a list of the client's currencies
     *
     * @param GetCurrencyList $parameters
     * @return GetCurrencyListResponse
     */
    public function GetCurrencyList(GetCurrencyList $parameters)
    {
      return $this->__soapCall('GetCurrencyList', [$parameters]);
    }

    /**
     * Gets a list of the client's typegroups
     *
     * @param GetTypeGroupList $parameters
     * @return GetTypeGroupListResponse
     */
    public function GetTypeGroupList(GetTypeGroupList $parameters)
    {
      return $this->__soapCall('GetTypeGroupList', [$parameters]);
    }

    /**
     * Gets a list of the client's VAT Types
     *
     * @param GetVatTypeList $parameters
     * @return GetVatTypeListResponse
     */
    public function GetVatTypeList(GetVatTypeList $parameters)
    {
      return $this->__soapCall('GetVatTypeList', [$parameters]);
    }

}
