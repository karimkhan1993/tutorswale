<?php

namespace Modules\ClassManagement\Console\Commands;

use Illuminate\Console\Command;

class ClassManagementCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ClassManagementCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ClassManagement Command description';

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
