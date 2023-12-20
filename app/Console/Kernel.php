<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Spatie\Permission\Middlewares\RoleMiddleware;
use Spatie\Permission\Middlewares\PermissionMiddleware;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Spatie\Permission\Middlewares\RoleOrPermissionMiddleware;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
    // // protected $routeMiddleware = [
    // //     'role' => RoleMiddleware::class,
    // //     'permission' => PermissionMiddleware::class,
    // //     'role_or_permission' => RoleOrPermissionMiddleware::class,
    // ];

}
