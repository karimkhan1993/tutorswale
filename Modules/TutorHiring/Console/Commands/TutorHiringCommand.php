<?php

namespace Modules\TutorHiring\Console\Commands;

use Illuminate\Console\Command;

class TutorHiringCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:TutorHiringCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'TutorHiring Command description';

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
