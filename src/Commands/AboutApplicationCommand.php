<?php

namespace Denniseilander\AboutApplication\Commands;

use Illuminate\Console\Command;

class AboutApplicationCommand extends Command
{
    public $signature = 'pulse-about-application';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
