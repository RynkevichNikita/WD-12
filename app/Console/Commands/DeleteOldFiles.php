<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;
use App\Models\Picture;

class DeleteOldFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-old-files';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete files older than 30 days';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $paths = Picture::all();
        // $files = Storage::files('paintings');
        foreach ($paths as $path) {
            $sec = Storage::lastModified($path->path);
            $month = Carbon::parse($sec)->addMonth(1);

            if(Carbon::now() > $month) {
                Storage::delete($path->path);
                Picture::destroy($path->id);
            }
        }
    }
}
