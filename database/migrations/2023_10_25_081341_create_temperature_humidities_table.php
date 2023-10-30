<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('temperature_humidities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('store_id');
            $table->string('signature');
            $table->string('time');
            $table->string('temp');
            $table->string('humidity');
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->foreign('store_id')->references('id')->on('stores')->onDelete;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temperature_humidity');
    }
};
