<?php

namespace TwentyFourSeven\CompanyService;

class CompanyService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = [
      'DeleteRelations' => 'TwentyFourSeven\\CompanyService\\DeleteRelations',
      'ArrayOfRelation' => 'TwentyFourSeven\\CompanyService\\ArrayOfRelation',
      'Relation' => 'TwentyFourSeven\\CompanyService\\Relation',
      'PhoneNumbers' => 'TwentyFourSeven\\CompanyService\\PhoneNumbers',
      'PhoneNumber' => 'TwentyFourSeven\\CompanyService\\PhoneNumber',
      'EmailAddresses' => 'TwentyFourSeven\\CompanyService\\EmailAddresses',
      'EmailAddress' => 'TwentyFourSeven\\CompanyService\\EmailAddress',
      'DeleteRelationsResponse' => 'TwentyFourSeven\\CompanyService\\DeleteRelationsResponse',
      'DeleteCompanies' => 'TwentyFourSeven\\CompanyService\\DeleteCompanies',
      'ArrayOfCompany' => 'TwentyFourSeven\\CompanyService\\ArrayOfCompany',
      'Company' => 'TwentyFourSeven\\CompanyService\\Company',
      'APIException' => 'TwentyFourSeven\\CompanyService\\APIException',
      'Addresses' => 'TwentyFourSeven\\CompanyService\\Addresses',
      'Address' => 'TwentyFourSeven\\CompanyService\\Address',
      'ArrayOfCompanyMap' => 'TwentyFourSeven\\CompanyService\\ArrayOfCompanyMap',
      'CompanyMap' => 'TwentyFourSeven\\CompanyService\\CompanyMap',
      'DeleteCompaniesResponse' => 'TwentyFourSeven\\CompanyService\\DeleteCompaniesResponse',
      'SaveRelations' => 'TwentyFourSeven\\CompanyService\\SaveRelations',
      'SaveRelationsResponse' => 'TwentyFourSeven\\CompanyService\\SaveRelationsResponse',
      'DeleteMaps' => 'TwentyFourSeven\\CompanyService\\DeleteMaps',
      'DeleteMapsResponse' => 'TwentyFourSeven\\CompanyService\\DeleteMapsResponse',
      'SaveMaps' => 'TwentyFourSeven\\CompanyService\\SaveMaps',
      'SaveMapsResponse' => 'TwentyFourSeven\\CompanyService\\SaveMapsResponse',
      'GetCompanies' => 'TwentyFourSeven\\CompanyService\\GetCompanies',
      'CompanySearchParameters' => 'TwentyFourSeven\\CompanyService\\CompanySearchParameters',
      'ArrayOfString' => 'TwentyFourSeven\\CompanyService\\ArrayOfString',
      'GetCompaniesResponse' => 'TwentyFourSeven\\CompanyService\\GetCompaniesResponse',
      'GetCategories' => 'TwentyFourSeven\\CompanyService\\GetCategories',
      'GetCategoriesResponse' => 'TwentyFourSeven\\CompanyService\\GetCategoriesResponse',
      'ArrayOfCategory' => 'TwentyFourSeven\\CompanyService\\ArrayOfCategory',
      'Category' => 'TwentyFourSeven\\CompanyService\\Category',
      'GetCustomerCategories' => 'TwentyFourSeven\\CompanyService\\GetCustomerCategories',
      'GetCustomerCategoriesResponse' => 'TwentyFourSeven\\CompanyService\\GetCustomerCategoriesResponse',
      'ArrayOfInt' => 'TwentyFourSeven\\CompanyService\\ArrayOfInt',
      'SaveCustomerCategories' => 'TwentyFourSeven\\CompanyService\\SaveCustomerCategories',
      'ArrayOfKeyValuePair' => 'TwentyFourSeven\\CompanyService\\ArrayOfKeyValuePair',
      'KeyValuePair' => 'TwentyFourSeven\\CompanyService\\KeyValuePair',
      'SaveCustomerCategoriesResponse' => 'TwentyFourSeven\\CompanyService\\SaveCustomerCategoriesResponse',
      'ArrayOfAPIException' => 'TwentyFourSeven\\CompanyService\\ArrayOfAPIException',
      'DeleteCustomerCategories' => 'TwentyFourSeven\\CompanyService\\DeleteCustomerCategories',
      'DeleteCustomerCategoriesResponse' => 'TwentyFourSeven\\CompanyService\\DeleteCustomerCategoriesResponse',
      'GetCustomerCategoryTree' => 'TwentyFourSeven\\CompanyService\\GetCustomerCategoryTree',
      'GetCustomerCategoryTreeResponse' => 'TwentyFourSeven\\CompanyService\\GetCustomerCategoryTreeResponse',
      'SaveCompanies' => 'TwentyFourSeven\\CompanyService\\SaveCompanies',
      'SaveCompaniesResponse' => 'TwentyFourSeven\\CompanyService\\SaveCompaniesResponse',
      'GetStatuses' => 'TwentyFourSeven\\CompanyService\\GetStatuses',
      'GetStatusesResponse' => 'TwentyFourSeven\\CompanyService\\GetStatusesResponse',
    ];

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = [], $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge([
      'features' => 1,
    ], $options);
      if (!$wsdl) {
        $wsdl = 'CompanyService.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Deletes an array of relations and returns the ones where an delete error occured.
     *
     * @param DeleteRelations $parameters
     * @return DeleteRelationsResponse
     */
    public function DeleteRelations(DeleteRelations $parameters)
    {
      return $this->__soapCall('DeleteRelations', [$parameters]);
    }

    /**
     * Deletes an array of companies and returns the ones where an delete error occured.
     *
     * @param DeleteCompanies $parameters
     * @return DeleteCompaniesResponse
     */
    public function DeleteCompanies(DeleteCompanies $parameters)
    {
      return $this->__soapCall('DeleteCompanies', [$parameters]);
    }

    /**
     * Saves an array of relations and returns the ones where an error occured.
     *
     * @param SaveRelations $parameters
     * @return SaveRelationsResponse
     */
    public function SaveRelations(SaveRelations $parameters)
    {
      return $this->__soapCall('SaveRelations', [$parameters]);
    }

    /**
     * Deletes an array of maps and returns the ones where an error occured.
     *
     * @param DeleteMaps $parameters
     * @return DeleteMapsResponse
     */
    public function DeleteMaps(DeleteMaps $parameters)
    {
      return $this->__soapCall('DeleteMaps', [$parameters]);
    }

    /**
     * Saves an array of maps and returns the ones where an error occured.
     *
     * @param SaveMaps $parameters
     * @return SaveMapsResponse
     */
    public function SaveMaps(SaveMaps $parameters)
    {
      return $this->__soapCall('SaveMaps', [$parameters]);
    }

    /**
     * Gets a list of companies based on search parameters. You have to specify which properties you want returned.
     *
     * @param GetCompanies $parameters
     * @return GetCompaniesResponse
     */
    public function GetCompanies(GetCompanies $parameters)
    {
      return $this->__soapCall('GetCompanies', [$parameters]);
    }

    /**
     * Returns an array of CRM Categories
     *
     * @param GetCategories $parameters
     * @return GetCategoriesResponse
     */
    public function GetCategories(GetCategories $parameters)
    {
      return $this->__soapCall('GetCategories', [$parameters]);
    }

    /**
     * Returns an array of category ids linked to a specified customer
     *
     * @param GetCustomerCategories $parameters
     * @return GetCustomerCategoriesResponse
     */
    public function GetCustomerCategories(GetCustomerCategories $parameters)
    {
      return $this->__soapCall('GetCustomerCategories', [$parameters]);
    }

    /**
     * Saves categories to customers (Key=CategoryId, Value=CustomerId) and returns a list of errors (if any)
     *
     * @param SaveCustomerCategories $parameters
     * @return SaveCustomerCategoriesResponse
     */
    public function SaveCustomerCategories(SaveCustomerCategories $parameters)
    {
      return $this->__soapCall('SaveCustomerCategories', [$parameters]);
    }

    /**
     * Deletes categories from customers (Key=CategoryId, Value=CustomerId) and returns a list of errors (if any)
     *
     * @param DeleteCustomerCategories $parameters
     * @return DeleteCustomerCategoriesResponse
     */
    public function DeleteCustomerCategories(DeleteCustomerCategories $parameters)
    {
      return $this->__soapCall('DeleteCustomerCategories', [$parameters]);
    }

    /**
     * Key = CategoryId, Value = CustomerId
     *
     * @param GetCustomerCategoryTree $parameters
     * @return GetCustomerCategoryTreeResponse
     */
    public function GetCustomerCategoryTree(GetCustomerCategoryTree $parameters)
    {
      return $this->__soapCall('GetCustomerCategoryTree', [$parameters]);
    }

    /**
     * Saves all companies in the array. Please see APIException property for errors.
     *
     * @param SaveCompanies $parameters
     * @return SaveCompaniesResponse
     */
    public function SaveCompanies(SaveCompanies $parameters)
    {
      return $this->__soapCall('SaveCompanies', [$parameters]);
    }

    /**
     * Get a list of all CRM Statuses.
     *
     * @param GetStatuses $parameters
     * @return GetStatusesResponse
     */
    public function GetStatuses(GetStatuses $parameters)
    {
      return $this->__soapCall('GetStatuses', [$parameters]);
    }

}
