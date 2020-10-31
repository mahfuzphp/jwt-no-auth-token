<?php

namespace Mahfuzrh\JwtNoAuthToken;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mahfuzrh\JwtNoAuthToken\JwtNoAuthToken
 */
class JwtNoAuthTokenFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'JwtNoAuthToken';//'jwt-no-auth-token';
    }
}
