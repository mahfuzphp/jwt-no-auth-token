<?php

namespace Mahfuzrh\JwtNoAuthToken\Tests;

use Mahfuzrh\JwtNoAuthToken\JwtNoAuthToken;
use Orchestra\Testbench\TestCase;

class TokenEncodeDecodeTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        dd(config('jwt-no-auth-token'));

        $jwt = new JwtNoAuthToken();
        $token = $jwt->encode();
//        dd((new Parser())->parse($token));
//        dd((new Parser())->parse('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvd3NjYXBpLnJvYmkuY29tLmJkXC92MVwvYWNjb3VudFwvbG9naW4iLCJpYXQiOjE2MDMzNjQ1ODUsImV4cCI6MTYwMzQ1MDk4NSwibmJmIjoxNjAzMzY0NTg1LCJqdGkiOiJxcm9qa2pIb09WSnhIMHJpIiwic3ViIjoxMzgzOSwicHJ2IjoiMmU1MjY0N2FkOGQ3ZWZlNDliYWZkNjc0NGIyNmY0NGQwNDQxN2NiYSJ9.0wRZg0EgN5ZYKuxL-qX57I5sUS6wMZdZqPTqoeaFWRw'));
//        dd((new Parser())->parse('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvd3NjYXBpLnJvYmkuY29tLmJkXC92MVwvdG9rZW4iLCJpYXQiOjE2MDM4ODEzMTAsImV4cCI6MTYwMzk2NzcxMCwibmJmIjoxNjAzODgxMzEwLCJqdGkiOiJ4N0ZIa2E5ckVNNXVITklhIiwic3ViIjoiUm9iaVdlYlNpdGUifQ.amx4LMzK14g6r93al5v6hfHP1bxjq6EfOuRqylH-7qo'));

        $r = $jwt->check($token);

        $this->assertTrue($r);
    }
}
