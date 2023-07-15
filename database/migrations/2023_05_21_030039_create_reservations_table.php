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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id')->comment('customer_id');
            $table->unsignedBigInteger('course_id')->comment('courseMst_id');
            $table->unsignedBigInteger('place_id')->comment('placeMst_id');
            $table->unsignedBigInteger('number_reserving_seats')->comment('number_reserving_seats');
            $table->text('note')->nullable()->comment('note');
            $table->datetime('reserved_time')->comment('reserved_time');
            $table->foreign('customer_id')->references('id')->on('customer_msts');
            $table->foreign('course_id')->references('id')->on('course_msts');
            $table->foreign('place_id')->references('id')->on('place_msts');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
