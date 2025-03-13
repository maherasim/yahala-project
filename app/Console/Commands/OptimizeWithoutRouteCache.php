<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class OptimizeWithoutRouteCache extends Command
{
    protected $signature = 'optimize:custom';
    protected $description = 'Optimize application excluding route:cache and route:clear';

    public function handle()
    {
        $this->info('Running optimization commands...');

        // Run cache and optimization commands except route:cache and route:clear
        $this->call('config:cache');
        $this->call('config:clear');
        $this->call('view:cache');
        $this->call('view:clear');
        $this->call('event:cache');
        $this->call('event:clear');

        $this->info('Optimization completed successfully (excluding route cache).');
    }
}
