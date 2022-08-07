<?php

namespace Penh\SimpleCurrency\Commands;

use Illuminate\Console\Command;

class SimpleCurrencyCommand extends Command
{
    public $signature = 'penh:simple-currency';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
