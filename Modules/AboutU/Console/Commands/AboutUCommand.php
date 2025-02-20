<?php

namespace Modules\AboutU\Console\Commands;

use Illuminate\Console\Command;

class AboutUCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:AboutUCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'AboutU Command description';

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
