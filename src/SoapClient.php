<?php
namespace TwentyFourSeven;

use Exception;

/**
 * Class SoapClient
 *
 * @package TwentyFourSeven
 */
class SoapClient extends \SoapClient
{
    private static int $iCounter = 0;

	const	WSDLUrl			= '';
	const	API_CookieName	= 'ASP.NET_SessionId';
	const   API_SoapOptions	= [
				'trace'              => true,
				'exceptions'         => true,
				'soap_version'       => SOAP_1_2,
				'encoding'           => 'UTF-8',
				'connection_timeout' => '600'
			];

	/**
  * @var array $arrClassMap The defined classes
  */
	protected static $arrClassMap = [];

	/**
	 * @param string $strSessionID
	 *
	 * @return static
	 */
	public static function Create(string $strSessionID)
	{
		$oService	= new static(static::API_SoapOptions, static::WSDLUrl);

		$oService->__setCookie(static::API_CookieName, $strSessionID);

		return $oService;
	}

	/**
	 * @param array  $arrOptions A array of config values
	 * @param string $strWsdl    The wsdl file to use
	 *
	 * @throws Exception
	 */
	public function __construct(array $arrOptions = [], string $strWsdl)
	{
		if ($strWsdl === '')
		{
			throw new Exception('Missing WSDL!');
		}
		foreach (static::$arrClassMap as $strKey => $mValue)
		{
			if (!isset($arrOptions['classmap'][$strKey]))
			{
				$arrOptions['classmap'][$strKey]	= $mValue;
			}
		}

		$arrOptions	= array_merge([
				'features' => 1,
			], $arrOptions
		);

		parent::__construct($strWsdl, $arrOptions);
	}

    /**
     * @param string $name
     * @param array  $args
     * @param null   $options
     * @param null   $inputHeaders
     * @param null   $outputHeaders
     *
     * @return mixed|void
     */
	public function __soapCall($name, $args, $options = null, $inputHeaders = null, &$outputHeaders = null)
    {
        self::$iCounter++;
        return parent::__soapCall($name, $args, $options, $inputHeaders, $outputHeaders);
    }

    /**
     * @return int
     */
    public function getNumberOfCalls(): int
    {
        return self::$iCounter;
    }
}