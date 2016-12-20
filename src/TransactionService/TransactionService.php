<?php
namespace TwentyFourSeven\TransactionService;

use TwentyFourSeven\SoapClient;

/**
 * Class TransactionService
 *
 * @package TwentyFourSeven\TransactionService
 */
class TransactionService extends SoapClient
{
	const	WSDLUrl			= 'https://api.24sevenoffice.com/Economy/Accounting/V001/TransactionService.asmx?WSDL';

    /**
     * @var array $arrClassMap The defined classes
     */
    protected static $arrClassMap = [
      'GetTransactionTypes' => 'TwentyFourSeven\\TransactionService\\GetTransactionTypes',
      'GetTransactionTypesResponse' => 'TwentyFourSeven\\TransactionService\\GetTransactionTypesResponse',
      'ArrayOfTransactionType' => 'TwentyFourSeven\\TransactionService\\ArrayOfTransactionType',
      'TransactionType' => 'TwentyFourSeven\\TransactionService\\TransactionType',
      'GetUserDefinedDimensions' => 'TwentyFourSeven\\TransactionService\\GetUserDefinedDimensions',
      'GetUserDefinedDimensionsResponse' => 'TwentyFourSeven\\TransactionService\\GetUserDefinedDimensionsResponse',
      'ArrayOfDimension' => 'TwentyFourSeven\\TransactionService\\ArrayOfDimension',
      'Dimension' => 'TwentyFourSeven\\TransactionService\\Dimension',
      'GetTransactions' => 'TwentyFourSeven\\TransactionService\\GetTransactions',
      'TransactionSearchParameters' => 'TwentyFourSeven\\TransactionService\\TransactionSearchParameters',
      'GetTransactionsResponse' => 'TwentyFourSeven\\TransactionService\\GetTransactionsResponse',
      'ArrayOfTransaction' => 'TwentyFourSeven\\TransactionService\\ArrayOfTransaction',
      'Transaction' => 'TwentyFourSeven\\TransactionService\\Transaction',
      'GetAggregated' => 'TwentyFourSeven\\TransactionService\\GetAggregated',
      'ArrayOfShort' => 'TwentyFourSeven\\TransactionService\\ArrayOfShort',
      'GetAggregatedResponse' => 'TwentyFourSeven\\TransactionService\\GetAggregatedResponse',
      'ArrayOfAggregatedData' => 'TwentyFourSeven\\TransactionService\\ArrayOfAggregatedData',
      'AggregatedData' => 'TwentyFourSeven\\TransactionService\\AggregatedData',
      'ArrayOfKeyValuePair' => 'TwentyFourSeven\\TransactionService\\ArrayOfKeyValuePair',
      'KeyValuePair' => 'TwentyFourSeven\\TransactionService\\KeyValuePair',
    ];

    /**
     * @param GetTransactionTypes $parameters
     * @return GetTransactionTypesResponse
     */
    public function GetTransactionTypes(GetTransactionTypes $parameters)
    {
      return $this->__soapCall('GetTransactionTypes', [$parameters]);
    }

    /**
     * @param GetUserDefinedDimensions $parameters
     * @return GetUserDefinedDimensionsResponse
     */
    public function GetUserDefinedDimensions(GetUserDefinedDimensions $parameters)
    {
      return $this->__soapCall('GetUserDefinedDimensions', [$parameters]);
    }

    /**
     * @param GetTransactions $parameters
     * @return GetTransactionsResponse
     */
    public function GetTransactions(GetTransactions $parameters)
    {
      return $this->__soapCall('GetTransactions', [$parameters]);
    }

    /**
     * @param GetAggregated $parameters
     * @return GetAggregatedResponse
     */
    public function GetAggregated(GetAggregated $parameters)
    {
      return $this->__soapCall('GetAggregated', [$parameters]);
    }

}
