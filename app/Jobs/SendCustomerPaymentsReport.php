<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class SendCustomerPaymentsReport implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $payments;

    /**
     * Create a new job instance.
     */
    public function __construct($payments)
    {
        $this->payments = $payments;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Storage::disk('local')->put('example.txt', $this->payments);
    }
}
