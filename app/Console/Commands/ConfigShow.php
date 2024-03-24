<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;

class ConfigShow extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'config:show {filekey}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $value = config($this->argument('filekey'));
        if (!$value) {
            $this->error('Key does not exist!');  
        }
        echo $value;
        $this->newLine();
    }

    protected function promptForMissingArgumentsUsing()
    {
        return [
            'filekey' => ['Write your file and key', 'app.local'],
        ];
    }
}
