<?php

namespace Modules\SubjectManagement\Console\Commands;

use Illuminate\Console\Command;

class SubjectManagementCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:SubjectManagementCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'SubjectManagement Command description';

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
