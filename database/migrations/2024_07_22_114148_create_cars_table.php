<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            
            /* car details */
            $table->string('brand');
            $table->string('model');
            $table->string('year');
            $table->string('fuel_type');
            $table->integer('odometer');
            
            /* registration details */
            $table->string('license_plate');
            $table->string('engine_id');
            $table->string('vin_number');
            $table->string('vehicle_operator');
            $table->string('registration_number');
            $table->string('owner');
            $table->date('registration_renewal_date');
            
            /* insurance details */
            $table->string('insurance_company');
            $table->string('insurance_bond_number');
            $table->date('insurance_renewal_date');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
