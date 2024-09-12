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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('enterprise');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->time('departure_hour');
            $table->time('arrival_hour');
            $table->tinyInteger('numbers_of_carriages')->unsigned();
            $table->tinyInteger('on_time')->default(1);
            $table->tinyInteger('cancelled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
