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
        Schema::create('amenity_msts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('place_id')->comment('placeMst_id');
            $table->string('name')->comment('amenity_name');
            $table->string('explanation')->comment('amenity_explanation');
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
        Schema::dropIfExists('amenity_msts');
    }
};
