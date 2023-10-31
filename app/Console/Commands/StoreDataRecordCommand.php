<?php

namespace App\Console\Commands;

use App\Models\Store;
use App\Models\TemperatureHumidity;
use Illuminate\Console\Command;

class StoreDataRecordCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:store-data-record-command';

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
    }
}
