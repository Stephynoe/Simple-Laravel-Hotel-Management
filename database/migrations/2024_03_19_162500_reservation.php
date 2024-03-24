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
        if(!Schema::hasTable('reservations')){
            Schema::create('reservations', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email');
                $table->string('room');
                $table->dateTime('checkin_date');
                $table->dateTime('checkout_date');
                $table->string('lighting');
                $table->string('bedspread');
                $table->string('heater');
                $table->string('air_condition');
                $table->string('total_amount');
                $table->string('reservation_code');
                $table->timestamp('reservation_created_at')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
