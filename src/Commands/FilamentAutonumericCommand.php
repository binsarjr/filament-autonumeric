<?php

namespace Binsarjr\FilamentAutonumeric\Commands;

use Illuminate\Console\Command;

class FilamentAutonumericCommand extends Command
{
    public $signature = 'filament-autonumeric';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
