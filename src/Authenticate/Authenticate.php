<?php
namespace TwentyFourSeven\Authenticate;

use Exception;
use TwentyFourSeven\SoapClient;


/**
 * This webservice provides authentication of webservice users and community users of 24SevenOffice. After using the
 * authentication method the header will contain a cookie parameter 'ASP.NET_SessionId' that should be used in future
 * references with all Webservice method calls. This is done by using the property CookieContainer in .NET language.
 *
 * SPY NOTE: Use only the static::GetSessionID() method, we don't need anything else! :D
 */
class Authenticate extends SoapClient
{
	const	WSDLUrl			= 'https://api.24sevenoffice.com/authenticate/v001/authenticate.asmx?wsdl';

	/** @var string[] */
	private static $arrSessionID = [];

    /**
     * @var array $arrClassMap The defined classes
     */
    protected static $arrClassMap = [
      'AuthenticateByToken' => 'TwentyFourSeven\\Authenticate\\AuthenticateByToken',
      'Token' => 'TwentyFourSeven\\Authenticate\\Token',
      'AuthenticateByTokenResponse' => 'TwentyFourSeven\\Authenticate\\AuthenticateByTokenResponse',
      'Passport' => 'TwentyFourSeven\\Authenticate\\Passport',
      'ArrayOfIdentity' => 'TwentyFourSeven\\Authenticate\\ArrayOfIdentity',
      'Identity' => 'TwentyFourSeven\\Authenticate\\Identity',
      'User' => 'TwentyFourSeven\\Authenticate\\User',
      'Client' => 'TwentyFourSeven\\Authenticate\\Client',
      'ArrayOfServer' => 'TwentyFourSeven\\Authenticate\\ArrayOfServer',
      'Server' => 'TwentyFourSeven\\Authenticate\\Server',
      'Login' => 'TwentyFourSeven\\Authenticate\\Login',
      'Credential' => 'TwentyFourSeven\\Authenticate\\Credential',
      'LoginResponse' => 'TwentyFourSeven\\Authenticate\\LoginResponse',
      'HasSession' => 'TwentyFourSeven\\Authenticate\\HasSession',
      'HasSessionResponse' => 'TwentyFourSeven\\Authenticate\\HasSessionResponse',
      'GetIdentity' => 'TwentyFourSeven\\Authenticate\\GetIdentity',
      'GetIdentityResponse' => 'TwentyFourSeven\\Authenticate\\GetIdentityResponse',
      'GetIdentities' => 'TwentyFourSeven\\Authenticate\\GetIdentities',
      'GetIdentitiesResponse' => 'TwentyFourSeven\\Authenticate\\GetIdentitiesResponse',
      'SetIdentity' => 'TwentyFourSeven\\Authenticate\\SetIdentity',
      'SetIdentityResponse' => 'TwentyFourSeven\\Authenticate\\SetIdentityResponse',
      'SetIdentityById' => 'TwentyFourSeven\\Authenticate\\SetIdentityById',
      'SetIdentityByIdResponse' => 'TwentyFourSeven\\Authenticate\\SetIdentityByIdResponse',
      'GetIdentitiesWithCredential' => 'TwentyFourSeven\\Authenticate\\GetIdentitiesWithCredential',
      'GetIdentitiesWithCredentialResponse' => 'TwentyFourSeven\\Authenticate\\GetIdentitiesWithCredentialResponse',
      'GetIdentitiesWithCredentialByService' => 'TwentyFourSeven\\Authenticate\\GetIdentitiesWithCredentialByService',
      'GetIdentitiesWithCredentialByServiceResponse' => 'TwentyFourSeven\\Authenticate\\GetIdentitiesWithCredentialByServiceResponse',
    ];

	/**
	 *
	 * @param string $strSessionID
	 *
	 * @return bool
	 */
	protected function isValidSession(string $strSessionID) : bool
	{
		$this->__setCookie(static::API_CookieName, $strSessionID);
		try
		{
			$bValid		= $this->HasSession(new HasSession())->getHasSessionResult();
		}
		catch (Exception $oException)
		{
			$bValid		= false;
		}
		return $bValid;
	}

	/**
	 * @param string $strApplicationID
	 * @param string $strUserName
	 * @param string $strPassword
	 * @param string $strSessionID
	 *
	 * @return string
	 * @throws Exception
	 */
	public static function GetSessionID(string $strApplicationID, string $strIdentityID, string $strUserName, string $strPassword, string $strSessionID = '') : string
	{
		if ($strSessionID !== '')
		{
			static::$arrSessionID[$strApplicationID.$strIdentityID]	= $strSessionID;
		}

		$oAuthenticate		= new self(static::API_SoapOptions, static::WSDLUrl);

		if ( (static::$arrSessionID[$strApplicationID.$strIdentityID] ?? '') === '' || !$oAuthenticate->isValidSession(static::$arrSessionID[$strApplicationID.$strIdentityID]))
		{
			$strSessionID		= $oAuthenticate->Login(new Login(new Credential($strApplicationID, $strUserName, $strPassword)))->getLoginResult();
			if (!$oAuthenticate->isValidSession($strSessionID))
			{
				throw new Exception('Invalid Credentials');
			}

			static::$arrSessionID[$strApplicationID.$strIdentityID]	= $strSessionID;
		}

		return static::$arrSessionID[$strApplicationID.$strIdentityID];
	}

    /**
     * Authenticate the passed credentials, if it is successful it will return the session id for the cookie parameter 'ASP.NET_SessionId', otherwise an empty string. Passwords should always be MD5 hashed in UTF-16 Little Endian (Unicode).
     *
     * @param AuthenticateByToken $parameters
     * @return AuthenticateByTokenResponse
     */
    public function AuthenticateByToken(AuthenticateByToken $parameters)
    {
      return $this->__soapCall('AuthenticateByToken', [$parameters]);
    }

    /**
     * Authenticate the passed credentials, if it is successful it will return the session id for the cookie parameter 'ASP.NET_SessionId', otherwise an empty string. Passwords should always be MD5 hashed in UTF-16 Little Endian (Unicode).
     *
     * @param Login $parameters
     * @return LoginResponse
     */
    public function Login(Login $parameters)
    {
      return $this->__soapCall('Login', [$parameters]);
    }

    /**
     * Return whether your current session is authenticated or not.
     *
     * @param HasSession $parameters
     * @return HasSessionResponse
     */
    public function HasSession(HasSession $parameters)
    {
      return $this->__soapCall('HasSession', [$parameters]);
    }

    /**
     * Get the current identity
     *
     * @param GetIdentity $parameters
     * @return GetIdentityResponse
     */
    public function GetIdentity(GetIdentity $parameters)
    {
      return $this->__soapCall('GetIdentity', [$parameters]);
    }

    /**
     * Get a list of available identities for this session if authenticated as community.
     *
     * @param GetIdentities $parameters
     * @return GetIdentitiesResponse
     */
    public function GetIdentities(GetIdentities $parameters)
    {
      return $this->__soapCall('GetIdentities', [$parameters]);
    }

    /**
     * Set the current map for the community session. Returns whether it is successful or not.
     *
     * @param SetIdentity $parameters
     * @return SetIdentityResponse
     */
    public function SetIdentity(SetIdentity $parameters)
    {
      return $this->__soapCall('SetIdentity', [$parameters]);
    }

    /**
     * Set the current map by an identity for the community session. Returns whether it is successful or not.
     *
     * @param SetIdentityById $parameters
     * @return SetIdentityByIdResponse
     */
    public function SetIdentityById(SetIdentityById $parameters)
    {
      return $this->__soapCall('SetIdentityById', [$parameters]);
    }

    /**
     * @param GetIdentitiesWithCredential $parameters
     * @return GetIdentitiesWithCredentialResponse
     */
    public function GetIdentitiesWithCredential(GetIdentitiesWithCredential $parameters)
    {
      return $this->__soapCall('GetIdentitiesWithCredential', [$parameters]);
    }

    /**
     * @param GetIdentitiesWithCredentialByService $parameters
     * @return GetIdentitiesWithCredentialByServiceResponse
     */
    public function GetIdentitiesWithCredentialByService(GetIdentitiesWithCredentialByService $parameters)
    {
      return $this->__soapCall('GetIdentitiesWithCredentialByService', [$parameters]);
    }

}
