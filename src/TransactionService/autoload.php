<?php


/**
 * @param $class
 */
function autoload_5a949035e949d1a3f7541e066fe7035e($class)
{
    $classes = array(
        'TwentyFourSeven\TransactionService\TransactionService' => __DIR__ .'/TransactionService.php',
        'TwentyFourSeven\TransactionService\GetTransactionTypes' => __DIR__ .'/GetTransactionTypes.php',
        'TwentyFourSeven\TransactionService\GetTransactionTypesResponse' => __DIR__ .'/GetTransactionTypesResponse.php',
        'TwentyFourSeven\TransactionService\ArrayOfTransactionType' => __DIR__ .'/ArrayOfTransactionType.php',
        'TwentyFourSeven\TransactionService\TransactionType' => __DIR__ .'/TransactionType.php',
        'TwentyFourSeven\TransactionService\GetUserDefinedDimensions' => __DIR__ .'/GetUserDefinedDimensions.php',
        'TwentyFourSeven\TransactionService\GetUserDefinedDimensionsResponse' => __DIR__ .'/GetUserDefinedDimensionsResponse.php',
        'TwentyFourSeven\TransactionService\ArrayOfDimension' => __DIR__ .'/ArrayOfDimension.php',
        'TwentyFourSeven\TransactionService\Dimension' => __DIR__ .'/Dimension.php',
        'TwentyFourSeven\TransactionService\DimensionType' => __DIR__ .'/DimensionType.php',
        'TwentyFourSeven\TransactionService\GetTransactions' => __DIR__ .'/GetTransactions.php',
        'TwentyFourSeven\TransactionService\TransactionSearchParameters' => __DIR__ .'/TransactionSearchParameters.php',
        'TwentyFourSeven\TransactionService\TransactionSystemType' => __DIR__ .'/TransactionSystemType.php',
        'TwentyFourSeven\TransactionService\GetTransactionsResponse' => __DIR__ .'/GetTransactionsResponse.php',
        'TwentyFourSeven\TransactionService\ArrayOfTransaction' => __DIR__ .'/ArrayOfTransaction.php',
        'TwentyFourSeven\TransactionService\Transaction' => __DIR__ .'/Transaction.php',
        'TwentyFourSeven\TransactionService\GetAggregated' => __DIR__ .'/GetAggregated.php',
        'TwentyFourSeven\TransactionService\ArrayOfShort' => __DIR__ .'/ArrayOfShort.php',
        'TwentyFourSeven\TransactionService\PeriodType' => __DIR__ .'/PeriodType.php',
        'TwentyFourSeven\TransactionService\GetAggregatedResponse' => __DIR__ .'/GetAggregatedResponse.php',
        'TwentyFourSeven\TransactionService\ArrayOfAggregatedData' => __DIR__ .'/ArrayOfAggregatedData.php',
        'TwentyFourSeven\TransactionService\AggregatedData' => __DIR__ .'/AggregatedData.php',
        'TwentyFourSeven\TransactionService\ArrayOfKeyValuePair' => __DIR__ .'/ArrayOfKeyValuePair.php',
        'TwentyFourSeven\TransactionService\KeyValuePair' => __DIR__ .'/KeyValuePair.php'
    );
    if (!empty($classes[$class])) {
		/** @noinspection PhpIncludeInspection */
		include $classes[$class];
    };
}

spl_autoload_register('autoload_5a949035e949d1a3f7541e066fe7035e');

// Do nothing. The rest is just leftovers from the code generation.
{
}
