<?php


 function autoload_ab6311043dace37f62738b3dd9b97ca6($class)
{
    $classes = array(
        'TwentyFourSeven\CompanyService\CompanyService' => __DIR__ . '/CompanyService.php',
        'TwentyFourSeven\CompanyService\DeleteRelations' => __DIR__ . '/DeleteRelations.php',
        'TwentyFourSeven\CompanyService\ArrayOfRelation' => __DIR__ . '/ArrayOfRelation.php',
        'TwentyFourSeven\CompanyService\Relation' => __DIR__ . '/Relation.php',
        'TwentyFourSeven\CompanyService\PhoneNumbers' => __DIR__ . '/PhoneNumbers.php',
        'TwentyFourSeven\CompanyService\PhoneNumber' => __DIR__ . '/PhoneNumber.php',
        'TwentyFourSeven\CompanyService\EmailAddresses' => __DIR__ . '/EmailAddresses.php',
        'TwentyFourSeven\CompanyService\EmailAddress' => __DIR__ . '/EmailAddress.php',
        'TwentyFourSeven\CompanyService\DeleteRelationsResponse' => __DIR__ . '/DeleteRelationsResponse.php',
        'TwentyFourSeven\CompanyService\DeleteCompanies' => __DIR__ . '/DeleteCompanies.php',
        'TwentyFourSeven\CompanyService\ArrayOfCompany' => __DIR__ . '/ArrayOfCompany.php',
        'TwentyFourSeven\CompanyService\Company' => __DIR__ . '/Company.php',
        'TwentyFourSeven\CompanyService\APIException' => __DIR__ . '/APIException.php',
        'TwentyFourSeven\CompanyService\Addresses' => __DIR__ . '/Addresses.php',
        'TwentyFourSeven\CompanyService\Address' => __DIR__ . '/Address.php',
        'TwentyFourSeven\CompanyService\CompanyType' => __DIR__ . '/CompanyType.php',
        'TwentyFourSeven\CompanyService\ArrayOfCompanyMap' => __DIR__ . '/ArrayOfCompanyMap.php',
        'TwentyFourSeven\CompanyService\CompanyMap' => __DIR__ . '/CompanyMap.php',
        'TwentyFourSeven\CompanyService\DistributionMethod' => __DIR__ . '/DistributionMethod.php',
        'TwentyFourSeven\CompanyService\CurrencyType' => __DIR__ . '/CurrencyType.php',
        'TwentyFourSeven\CompanyService\DeleteCompaniesResponse' => __DIR__ . '/DeleteCompaniesResponse.php',
        'TwentyFourSeven\CompanyService\SaveRelations' => __DIR__ . '/SaveRelations.php',
        'TwentyFourSeven\CompanyService\SaveRelationsResponse' => __DIR__ . '/SaveRelationsResponse.php',
        'TwentyFourSeven\CompanyService\DeleteMaps' => __DIR__ . '/DeleteMaps.php',
        'TwentyFourSeven\CompanyService\DeleteMapsResponse' => __DIR__ . '/DeleteMapsResponse.php',
        'TwentyFourSeven\CompanyService\SaveMaps' => __DIR__ . '/SaveMaps.php',
        'TwentyFourSeven\CompanyService\SaveMapsResponse' => __DIR__ . '/SaveMapsResponse.php',
        'TwentyFourSeven\CompanyService\GetCompanies' => __DIR__ . '/GetCompanies.php',
        'TwentyFourSeven\CompanyService\CompanySearchParameters' => __DIR__ . '/CompanySearchParameters.php',
        'TwentyFourSeven\CompanyService\ArrayOfString' => __DIR__ . '/ArrayOfString.php',
        'TwentyFourSeven\CompanyService\GetCompaniesResponse' => __DIR__ . '/GetCompaniesResponse.php',
        'TwentyFourSeven\CompanyService\GetCategories' => __DIR__ . '/GetCategories.php',
        'TwentyFourSeven\CompanyService\GetCategoriesResponse' => __DIR__ . '/GetCategoriesResponse.php',
        'TwentyFourSeven\CompanyService\ArrayOfCategory' => __DIR__ . '/ArrayOfCategory.php',
        'TwentyFourSeven\CompanyService\Category' => __DIR__ . '/Category.php',
        'TwentyFourSeven\CompanyService\GetCustomerCategories' => __DIR__ . '/GetCustomerCategories.php',
        'TwentyFourSeven\CompanyService\GetCustomerCategoriesResponse' => __DIR__ . '/GetCustomerCategoriesResponse.php',
        'TwentyFourSeven\CompanyService\ArrayOfInt' => __DIR__ . '/ArrayOfInt.php',
        'TwentyFourSeven\CompanyService\SaveCustomerCategories' => __DIR__ . '/SaveCustomerCategories.php',
        'TwentyFourSeven\CompanyService\ArrayOfKeyValuePair' => __DIR__ . '/ArrayOfKeyValuePair.php',
        'TwentyFourSeven\CompanyService\KeyValuePair' => __DIR__ . '/KeyValuePair.php',
        'TwentyFourSeven\CompanyService\SaveCustomerCategoriesResponse' => __DIR__ . '/SaveCustomerCategoriesResponse.php',
        'TwentyFourSeven\CompanyService\ArrayOfAPIException' => __DIR__ . '/ArrayOfAPIException.php',
        'TwentyFourSeven\CompanyService\DeleteCustomerCategories' => __DIR__ . '/DeleteCustomerCategories.php',
        'TwentyFourSeven\CompanyService\DeleteCustomerCategoriesResponse' => __DIR__ . '/DeleteCustomerCategoriesResponse.php',
        'TwentyFourSeven\CompanyService\GetCustomerCategoryTree' => __DIR__ . '/GetCustomerCategoryTree.php',
        'TwentyFourSeven\CompanyService\GetCustomerCategoryTreeResponse' => __DIR__ . '/GetCustomerCategoryTreeResponse.php',
        'TwentyFourSeven\CompanyService\SaveCompanies' => __DIR__ . '/SaveCompanies.php',
        'TwentyFourSeven\CompanyService\SaveCompaniesResponse' => __DIR__ . '/SaveCompaniesResponse.php',
        'TwentyFourSeven\CompanyService\GetStatuses' => __DIR__ . '/GetStatuses.php',
        'TwentyFourSeven\CompanyService\GetStatusesResponse' => __DIR__ . '/GetStatusesResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_ab6311043dace37f62738b3dd9b97ca6');

// Do nothing. The rest is just leftovers from the code generation.
{
}
