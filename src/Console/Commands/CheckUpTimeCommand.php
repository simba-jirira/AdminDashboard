<?php

namespace SimbaJirira\AdminDashboard\Console\Commands;

use Illuminate\Console\Command;

class CheckUpTimeCommand extends Command
{
    protected $signature = 'admin-dashboard:checkuptime';
    protected $description = 'Check the uptime of websites registered in the application';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Your uptime logic here.
        $this->info('Uptime check completed.');
    }
}
