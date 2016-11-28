<?php


 function autoload_892c1e29f1f44907b31b2cbcbce924bd($class)
{
    $classes = array(
        'TwentyFourSeven\ClientService\ClientService' => __DIR__ . '/ClientService.php',
        'TwentyFourSeven\ClientService\GetUsers' => __DIR__ . '/GetUsers.php',
        'TwentyFourSeven\ClientService\GetUsersResponse' => __DIR__ . '/GetUsersResponse.php',
        'TwentyFourSeven\ClientService\ArrayOfUser' => __DIR__ . '/ArrayOfUser.php',
        'TwentyFourSeven\ClientService\User' => __DIR__ . '/User.php',
        'TwentyFourSeven\ClientService\GetClientInformation' => __DIR__ . '/GetClientInformation.php',
        'TwentyFourSeven\ClientService\GetClientInformationResponse' => __DIR__ . '/GetClientInformationResponse.php',
        'TwentyFourSeven\ClientService\Client' => __DIR__ . '/Client.php',
        'TwentyFourSeven\ClientService\Addresses' => __DIR__ . '/Addresses.php',
        'TwentyFourSeven\ClientService\Address' => __DIR__ . '/Address.php',
        'TwentyFourSeven\ClientService\EmailAddresses' => __DIR__ . '/EmailAddresses.php',
        'TwentyFourSeven\ClientService\EmailAddress' => __DIR__ . '/EmailAddress.php',
        'TwentyFourSeven\ClientService\ArrayOfFaxNumber' => __DIR__ . '/ArrayOfFaxNumber.php',
        'TwentyFourSeven\ClientService\FaxNumber' => __DIR__ . '/FaxNumber.php',
        'TwentyFourSeven\ClientService\FaxNumberType' => __DIR__ . '/FaxNumberType.php',
        'TwentyFourSeven\ClientService\PhoneNumbers' => __DIR__ . '/PhoneNumbers.php',
        'TwentyFourSeven\ClientService\PhoneNumber' => __DIR__ . '/PhoneNumber.php',
        'TwentyFourSeven\ClientService\GetDepartmentList' => __DIR__ . '/GetDepartmentList.php',
        'TwentyFourSeven\ClientService\GetDepartmentListResponse' => __DIR__ . '/GetDepartmentListResponse.php',
        'TwentyFourSeven\ClientService\ArrayOfDepartment' => __DIR__ . '/ArrayOfDepartment.php',
        'TwentyFourSeven\ClientService\Department' => __DIR__ . '/Department.php',
        'TwentyFourSeven\ClientService\GetCurrencyList' => __DIR__ . '/GetCurrencyList.php',
        'TwentyFourSeven\ClientService\GetCurrencyListResponse' => __DIR__ . '/GetCurrencyListResponse.php',
        'TwentyFourSeven\ClientService\ArrayOfCurrency' => __DIR__ . '/ArrayOfCurrency.php',
        'TwentyFourSeven\ClientService\Currency' => __DIR__ . '/Currency.php',
        'TwentyFourSeven\ClientService\GetTypeGroupList' => __DIR__ . '/GetTypeGroupList.php',
        'TwentyFourSeven\ClientService\TypeGroupModule' => __DIR__ . '/TypeGroupModule.php',
        'TwentyFourSeven\ClientService\GetTypeGroupListResponse' => __DIR__ . '/GetTypeGroupListResponse.php',
        'TwentyFourSeven\ClientService\ArrayOfAccountingGroup' => __DIR__ . '/ArrayOfAccountingGroup.php',
        'TwentyFourSeven\ClientService\AccountingGroup' => __DIR__ . '/AccountingGroup.php',
        'TwentyFourSeven\ClientService\GetVatTypeList' => __DIR__ . '/GetVatTypeList.php',
        'TwentyFourSeven\ClientService\GetVatTypeListResponse' => __DIR__ . '/GetVatTypeListResponse.php',
        'TwentyFourSeven\ClientService\ArrayOfVatType' => __DIR__ . '/ArrayOfVatType.php',
        'TwentyFourSeven\ClientService\VatType' => __DIR__ . '/VatType.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_892c1e29f1f44907b31b2cbcbce924bd');

// Do nothing. The rest is just leftovers from the code generation.
{
}
