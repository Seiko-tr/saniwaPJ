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
        Schema::create('place_msts', function (Blueprint $table) {
            $table->id();
            $table->string('restaurant_name')->comment('restaurant_name');
            $table->string('place_phone')->commnet('restaurant_phone');
            $table->string('place_mailAddress')->comment('restaurant_mailAddress');
            $table->string('place_address')->comment('restaurant_address');
            $table->string('place_access')->cooment('restaurant_access');
            $table->unsignedBigInteger('number_seats')->comment('number_restaurant_seats');
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
        Schema::dropIfExists('amenity_msts');

        Schema::dropIfExists('place_msts');
    }
};
