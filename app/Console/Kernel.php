<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use App\Jobs\GetSeancesFromYaticketsForTeatr;
use App\Jobs\GetActivitiesList;
use App\Jobs\GetSeancesList;
use App\Jobs\GetPhilactivitiesList;
use App\Jobs\GetPhilseancesList;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
		
		//$schedule->job(new GetSeancesFromYaticketsForTeatr)->everyFiveMinutes();
		//$schedule->job(new GetSeancesFromYaticketsForTeatr)->everyMinute();
		
		$schedule->job(new GetActivitiesList)->everyMinute();
		$schedule->job(new GetSeancesList)->everyMinute();
		
		$schedule->job(new GetPhilactivitiesList)->everyMinute();
		$schedule->job(new GetPhilseancesList)->everyMinute();
		
		$schedule->command('queue:work --tries=1 --stop-when-empty')
			->everyMinute()
			->runInBackground();
			//->appendOutputTo(storage_path('logs\api_teatr.log'));
			//->appendOutputTo('/home/d/devnotka/teatrvn.ru/storage/logs/api_teatr.log');
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
}
