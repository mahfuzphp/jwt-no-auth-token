<?php

namespace Mahfuzrh\JwtNoAuthToken\Commands;

use Illuminate\Console\Command;

class JwtNoAuthTokenCommand extends Command
{
    public $signature = 'jwtNoAuthToken';

    public $description = 'token key generate';

    public function handle()
    {
        $this->comment('All done');
    }
}
