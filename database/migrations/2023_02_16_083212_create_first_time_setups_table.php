<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_time_setups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('location_id');

            $table->foreign('location_id')->references('id')->on('locations');
            $table->string('sensor_type');
            $table->integer('upper_limit');
            $table->integer('lower_limit');
            $table->unsignedInteger('interval');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('first_time_setups');
    }
};
