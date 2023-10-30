<?php

namespace App\Console;

use App\Models\Store;
use App\Models\TemperatureHumidity;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        // $schedule->command('store-data:record')->everyTenSeconds();`
        $schedule->call(function () {
            // احصل على جميع المخازن
            $stores = Store::all();

            foreach ($stores as $store) {
                $reading = new TemperatureHumidity();
                $reading->store_id = $store->id;
                $reading->signature = 'Marwa Mousa';
                $reading->temp = rand(15, 25); // قم بتغيير القيمة إلى درجة الحرارة الفعلية
                $reading->humidity = rand(20, 60); // قم بتغيير القيمة إلى رطوبة الهواء الفعلية
                $reading->time = now();
                $reading->save();
            }
        })->everyTenSeconds();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
