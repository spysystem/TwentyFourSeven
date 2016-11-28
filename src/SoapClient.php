<?php
namespace TwentyFourSeven;

/**
 * Class SoapClient
 *
 * @package TwentyFourSeven
 */
class SoapClient extends \SoapClient
{
	const	WSDLUrl			= '';
	const	API_CookieName	= 'ASP.NET_SessionId';
	const   API_SoapOptions	= [
				'trace'        => true,
				'exceptions'   => true,
				'soap_version' => SOAP_1_2,
				'encoding'     => 'UTF-8'
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
	 * @throws \Exception
	 */
	public function __construct(array $arrOptions = [], string $strWsdl)
	{
		if ($strWsdl === '')
		{
			throw new \Exception('Missing WSDL!');
		}
		foreach (static::$arrClassMap as $strKey => $mValue)
		{
			if (!isset($arrOptions['arrClassMap'][$strKey]))
			{
				$arrOptions['arrClassMap'][$strKey]	= $mValue;
			}
		}

		$arrOptions	= array_merge([
				'features' => 1,
			], $arrOptions
		);

		parent::__construct($strWsdl, $arrOptions);
	}
}