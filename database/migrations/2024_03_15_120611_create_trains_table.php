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
            $table->string('company', 60);
            $table->string('departure_station', 150);
            $table->string('arrival_station', 150);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code')->unique();
            $table->smallInteger('number_of_carriages')->nullable();
            $table->boolean('in_time')->default(true);
            $table->boolean('canceled')->default(false);
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
