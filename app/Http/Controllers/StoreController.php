<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\TemperatureHumidity;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function index()
    {
        $stores = Store::all();
        return view('index', compact('stores'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // إضافة مخزن
        $store = new Store();
        $store->name = $request->input('name');
        $store->save();

        // تسجيل القراءة الأولى
        $reading = new TemperatureHumidity();
        $reading->store_id = $store->id;
        $reading->signature = $request->input('signature');
        $reading->temp = $request->input('temp');
        $reading->humidity = $request->input('humidity');
        $reading->notes = $request->input('notes');
        $reading->time = now();

        $reading->save();

        return redirect()->route('index');
    }

    public function recordReading($store_id)
    {
        // العثور على المخزن
        $store = Store::find($store_id);

        // إذا تم العثور على المخزن، سجل القراءة
        if ($store) {
            $reading = new TemperatureHumidity();
            $reading->store_id = $store->id;
            $reading->signature = 'Marwa Mousa';
            $reading->temp = rand(15, 25); // قم بتغيير القيمة إلى درجة الحرارة الفعلية
            $reading->humidity = rand(20, 60); // قم بتغيير القيمة إلى رطوبة الهواء الفعلية
            $reading->time = now();
            $reading->save();

            return "تم تسجيل القراءة بنجاح.";
        } else {
            return "المخزن غير موجود.";
        }
    }


    public function show($id)
    {
        $store = Store::where('id', $id)->first();
        $readings = TemperatureHumidity::with('store')->where('store_id', $id)->get();
        return view('show', compact('store', 'readings'));
    }
}
