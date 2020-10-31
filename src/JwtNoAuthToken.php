<?php

namespace Mahfuzrh\JwtNoAuthToken;

use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Parser;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key;
use Lcobucci\JWT\ValidationData;

class JwtNoAuthToken
{
    private $subject;
    private $user;
    private $password;
    private $secret;
    private $ttl;

    public function __construct()
    {
        $this->subject = config('jwt-no-auth-token.sub', 'jwt-no-auth-token');
        $this->user = config('jwt-no-auth-token.username');
        $this->password = config('jwt-no-auth-token.password');
        $this->ttl = config('jwt-no-auth-token.ttl');
        $this->secret = config('jwt-no-auth-token.secret');
    }

    /**
     * @return string
     */
    public function encode(): string
    {
        dd(config('jwt-no-auth-token'));

        $time = time();
        $signer = new Sha256();

        $token = (new Builder())
            // ->issuedBy('http://example.com') // Configures the issuer (iss claim)
            // ->permittedFor('http://example.org') // Configures the audience (aud claim)
            ->identifiedBy($this->password, false) // Configures the id (jti claim),
            // replicating as a header item
            ->issuedAt($time) // Configures the time that the token was issue (iat claim)
            ->canOnlyBeUsedAfter($time) // Configures the time that the token can be used (nbf claim)
            ->expiresAt($time + $this->ttl) // Configures the expiration time of the token (exp claim)
            ->withClaim('uid', $this->user) // Configures a new claim, called "uid"
            ->relatedTo($this->subject)
            ->getToken($signer, new Key($this->secret)); // Retrieves the generated token

        return $token;
    }

    /**
     * @param string $token
     * @return bool
     */
    public function check(string $token): bool
    {
        $token = (new Parser())->parse((string) $token); // Parses from a string

        $signer = new Sha256();

        $data = new ValidationData(); // It will use the current time to validate (iat, nbf and exp)
//        $data->setIssuer('http://example.com');
//        $data->setAudience('http://example.org');
        $data->setSubject($this->subject);
        $data->setId($this->password);

//         $token->getHeader('jti'); // will print "$this->password"
//         $token->getClaim('uid'); // will print "$this->user"

        return ($token->verify($signer, $this->secret) && $token->validate($data));
    }
}
