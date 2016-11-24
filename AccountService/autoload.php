<?php


 function autoload_a2d7851b8730eaaa97df8e2ec5210572($class)
{
    $classes = array(
        'TwentyFourSeven\AccountService\AccountService' => __DIR__ .'/AccountService.php',
        'TwentyFourSeven\AccountService\SaveBundleList' => __DIR__ .'/SaveBundleList.php',
        'TwentyFourSeven\AccountService\BundleList' => __DIR__ .'/BundleList.php',
        'TwentyFourSeven\AccountService\ArrayOfBundle' => __DIR__ .'/ArrayOfBundle.php',
        'TwentyFourSeven\AccountService\Bundle' => __DIR__ .'/Bundle.php',
        'TwentyFourSeven\AccountService\ArrayOfVoucher' => __DIR__ .'/ArrayOfVoucher.php',
        'TwentyFourSeven\AccountService\Voucher' => __DIR__ .'/Voucher.php',
        'TwentyFourSeven\AccountService\ArrayOfEntry' => __DIR__ .'/ArrayOfEntry.php',
        'TwentyFourSeven\AccountService\Entry' => __DIR__ .'/Entry.php',
        'TwentyFourSeven\AccountService\ArrayOfLinkModel' => __DIR__ .'/ArrayOfLinkModel.php',
        'TwentyFourSeven\AccountService\LinkModel' => __DIR__ .'/LinkModel.php',
        'TwentyFourSeven\AccountService\LogType' => __DIR__ .'/LogType.php',
        'TwentyFourSeven\AccountService\SaveBundleListResponse' => __DIR__ .'/SaveBundleListResponse.php',
        'TwentyFourSeven\AccountService\saveRespons' => __DIR__ .'/saveRespons.php',
        'TwentyFourSeven\AccountService\ResponsType' => __DIR__ .'/ResponsType.php',
        'TwentyFourSeven\AccountService\Authentication' => __DIR__ .'/Authentication.php',
        'TwentyFourSeven\AccountService\GetEntryId' => __DIR__ .'/GetEntryId.php',
        'TwentyFourSeven\AccountService\EntryId' => __DIR__ .'/EntryId.php',
        'TwentyFourSeven\AccountService\GetEntryIdResponse' => __DIR__ .'/GetEntryIdResponse.php',
        'TwentyFourSeven\AccountService\GetAccountList' => __DIR__ .'/GetAccountList.php',
        'TwentyFourSeven\AccountService\GetAccountListResponse' => __DIR__ .'/GetAccountListResponse.php',
        'TwentyFourSeven\AccountService\ArrayOfAccountData' => __DIR__ .'/ArrayOfAccountData.php',
        'TwentyFourSeven\AccountService\AccountData' => __DIR__ .'/AccountData.php',
        'TwentyFourSeven\AccountService\GetTypeList' => __DIR__ .'/GetTypeList.php',
        'TwentyFourSeven\AccountService\GetTypeListResponse' => __DIR__ .'/GetTypeListResponse.php',
        'TwentyFourSeven\AccountService\ArrayOfTypeData' => __DIR__ .'/ArrayOfTypeData.php',
        'TwentyFourSeven\AccountService\TypeData' => __DIR__ .'/TypeData.php',
        'TwentyFourSeven\AccountService\GetTaxMappingLists' => __DIR__ .'/GetTaxMappingLists.php',
        'TwentyFourSeven\AccountService\GetTaxMappingListsResponse' => __DIR__ .'/GetTaxMappingListsResponse.php',
        'TwentyFourSeven\AccountService\ArrayOfTaxMappingList' => __DIR__ .'/ArrayOfTaxMappingList.php',
        'TwentyFourSeven\AccountService\TaxMappingList' => __DIR__ .'/TaxMappingList.php',
        'TwentyFourSeven\AccountService\ArrayOfTaxMappingElements' => __DIR__ .'/ArrayOfTaxMappingElements.php',
        'TwentyFourSeven\AccountService\TaxMappingElements' => __DIR__ .'/TaxMappingElements.php',
        'TwentyFourSeven\AccountService\GetTaxCodeList' => __DIR__ .'/GetTaxCodeList.php',
        'TwentyFourSeven\AccountService\GetTaxCodeListResponse' => __DIR__ .'/GetTaxCodeListResponse.php',
        'TwentyFourSeven\AccountService\ArrayOfTaxCodeElement' => __DIR__ .'/ArrayOfTaxCodeElement.php',
        'TwentyFourSeven\AccountService\TaxCodeElement' => __DIR__ .'/TaxCodeElement.php',
        'TwentyFourSeven\AccountService\CheckAccountNo' => __DIR__ .'/CheckAccountNo.php',
        'TwentyFourSeven\AccountService\CheckAccountNoResponse' => __DIR__ .'/CheckAccountNoResponse.php',
        'TwentyFourSeven\AccountService\ArrayOfAccountDataErrors' => __DIR__ .'/ArrayOfAccountDataErrors.php',
        'TwentyFourSeven\AccountService\AccountDataErrors' => __DIR__ .'/AccountDataErrors.php',
        'TwentyFourSeven\AccountService\ErrorType' => __DIR__ .'/ErrorType.php',
        'TwentyFourSeven\AccountService\LogMessage' => __DIR__ .'/LogMessage.php',
        'TwentyFourSeven\AccountService\LogMessageResponse' => __DIR__ .'/LogMessageResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_a2d7851b8730eaaa97df8e2ec5210572');

// Do nothing. The rest is just leftovers from the code generation.
{
}
