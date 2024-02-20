<?php

// /usr/local/bin/php /home/marinefi/domains/marinefishcluster.ge/public_html/laravel/artisan schedule:run mail:cron

namespace App\Console\Commands;

use App\Http\Controllers\Website\PagesController;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class MailCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        PagesController::sendmail();
        Log::info('Success');

        return 0;
    }
}
