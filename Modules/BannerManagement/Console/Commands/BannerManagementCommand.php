<?php

namespace Modules\BannerManagement\Console\Commands;

use Illuminate\Console\Command;

class BannerManagementCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:BannerManagementCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'BannerManagement Command description';

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
