<?php

namespace App\Console\Commands;

use App\Models\ZipCode;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class CacheZipCodes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:zip-codes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cache Zip Codes';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $zipCodes = ZipCode::with(['federalEntity', 'municipality'])->get();
        $zipCodes->each(function ($zipCode) {
            Cache::add($zipCode->zip_code, $zipCode);
        });

    }
}
