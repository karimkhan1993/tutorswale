<?php

namespace Modules\FAQ\Console\Commands;

use Illuminate\Console\Command;

class FAQCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:FAQCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'FAQ Command description';

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
