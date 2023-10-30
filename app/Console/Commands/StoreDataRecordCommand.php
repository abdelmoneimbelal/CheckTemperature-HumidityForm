<?php

namespace App\Console\Commands;

use App\Models\Form;
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
        $forms = Form::all(); // استرجاع جميع المخازن
        foreach ($forms as $form) {
            // قم بتسجيل بيانات المخزن هنا
            $formData = new TemperatureHumidity([
                'form_id' => $form->id,
                'name' => 'marwa mousa', // توقيت التسجيل الحالي
                'time' => now(), // توقيت التسجيل الحالي
                'temp' => 23, // قيمة درجة الحرارة الحالية,
                'humidity' => 50, // قيمة درجة الرطوبة الحالية,
                'notes' => '',     // الملاحظة إذا كانت مطلوبة
            ]);

            $formData->save();
        }
    }
}
