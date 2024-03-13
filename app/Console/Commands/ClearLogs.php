<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ClearLogs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:logs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete all files from storage/logs';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $files = Storage::files();
        Storage::delete($files);
        $this->info('The logs were cleared!');
    }
}
