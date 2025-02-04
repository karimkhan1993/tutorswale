<?php

namespace Modules\ExclusiveClass\Console\Commands;

use Illuminate\Console\Command;

class ExclusiveClassCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ExclusiveClassCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ExclusiveClass Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
