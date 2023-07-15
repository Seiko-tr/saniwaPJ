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
        Schema::create('menu_msts', function (Blueprint $table) {
            $table->id();
            $table->string('dish_name')->comment('dish_name');
            $table->string('price')->comment('dish_price');
            $table->unsignedBigInteger('course_id')->comment('courseMst_id');
            $table->foreign('course_id')->references('id')->on('course_msts');
            $table->unsignedBigInteger('allergy_id')->comment('allergyMst_id');
            $table->foreign('allergy_id')->references('id')->on('allergy_msts');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_msts');
    }
};
