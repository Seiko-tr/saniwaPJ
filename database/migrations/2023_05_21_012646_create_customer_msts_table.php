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
        Schema::create('customer_msts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('customer_name');
            $table->unsignedBigInteger('phone')->comment('customer_phone');
            $table->string('mailAddress')->comment('customer_mailAddress');
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
        Schema::dropIfExists('customer_msts');


    }
};
