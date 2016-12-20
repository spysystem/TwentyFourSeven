<?php


/**
 * @param $class
 */
function autoload_8899a1cd945fe654c5b74fbaa85e6a48($class)
{
    $classes = array(
        'TwentyFourSeven\Authenticate\Authenticate' => __DIR__ . '/Authenticate.php',
        'TwentyFourSeven\Authenticate\AuthenticateByToken' => __DIR__ . '/AuthenticateByToken.php',
        'TwentyFourSeven\Authenticate\Token' => __DIR__ . '/Token.php',
        'TwentyFourSeven\Authenticate\AuthenticateByTokenResponse' => __DIR__ . '/AuthenticateByTokenResponse.php',
        'TwentyFourSeven\Authenticate\Passport' => __DIR__ . '/Passport.php',
        'TwentyFourSeven\Authenticate\ArrayOfIdentity' => __DIR__ . '/ArrayOfIdentity.php',
        'TwentyFourSeven\Authenticate\Identity' => __DIR__ . '/Identity.php',
        'TwentyFourSeven\Authenticate\User' => __DIR__ . '/User.php',
        'TwentyFourSeven\Authenticate\Client' => __DIR__ . '/Client.php',
        'TwentyFourSeven\Authenticate\ArrayOfServer' => __DIR__ . '/ArrayOfServer.php',
        'TwentyFourSeven\Authenticate\Server' => __DIR__ . '/Server.php',
        'TwentyFourSeven\Authenticate\Login' => __DIR__ . '/Login.php',
        'TwentyFourSeven\Authenticate\Credential' => __DIR__ . '/Credential.php',
        'TwentyFourSeven\Authenticate\LoginResponse' => __DIR__ . '/LoginResponse.php',
        'TwentyFourSeven\Authenticate\HasSession' => __DIR__ . '/HasSession.php',
        'TwentyFourSeven\Authenticate\HasSessionResponse' => __DIR__ . '/HasSessionResponse.php',
        'TwentyFourSeven\Authenticate\GetIdentity' => __DIR__ . '/GetIdentity.php',
        'TwentyFourSeven\Authenticate\GetIdentityResponse' => __DIR__ . '/GetIdentityResponse.php',
        'TwentyFourSeven\Authenticate\GetIdentities' => __DIR__ . '/GetIdentities.php',
        'TwentyFourSeven\Authenticate\GetIdentitiesResponse' => __DIR__ . '/GetIdentitiesResponse.php',
        'TwentyFourSeven\Authenticate\SetIdentity' => __DIR__ . '/SetIdentity.php',
        'TwentyFourSeven\Authenticate\SetIdentityResponse' => __DIR__ . '/SetIdentityResponse.php',
        'TwentyFourSeven\Authenticate\SetIdentityById' => __DIR__ . '/SetIdentityById.php',
        'TwentyFourSeven\Authenticate\SetIdentityByIdResponse' => __DIR__ . '/SetIdentityByIdResponse.php',
        'TwentyFourSeven\Authenticate\GetIdentitiesWithCredential' => __DIR__ . '/GetIdentitiesWithCredential.php',
        'TwentyFourSeven\Authenticate\GetIdentitiesWithCredentialResponse' => __DIR__ . '/GetIdentitiesWithCredentialResponse.php',
        'TwentyFourSeven\Authenticate\GetIdentitiesWithCredentialByService' => __DIR__ . '/GetIdentitiesWithCredentialByService.php',
        'TwentyFourSeven\Authenticate\GetIdentitiesWithCredentialByServiceResponse' => __DIR__ . '/GetIdentitiesWithCredentialByServiceResponse.php'
    );
    if (!empty($classes[$class])) {
		/** @noinspection PhpIncludeInspection */
		include $classes[$class];
    };
}

spl_autoload_register('autoload_8899a1cd945fe654c5b74fbaa85e6a48');

// Do nothing. The rest is just leftovers from the code generation.
{
}
