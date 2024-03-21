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
        Schema::create('deceased_data', function (Blueprint $table) {
            $table->id();
            $table->string('exhibiting_office');
            $table->string('deceased_name');
            $table->string('birth_name')->nullable();
            $table->string('mother_name');
            // livin' location
            $table->string('zip_code');
            $table->string('street');
            $table->string('house_number');           

            $table->string('hospital_code');
            $table->DateTime('deceased_birth_day');
            $table->string('deceased_birth_place');
            $table->string('death_place');
            $table->DateTime('death_time');
            $table->DateTime('exhibiton_time');
            $table->string('pensioner_id');
            $table->string('id_card_number');
            $table->string('address_id_number');
            $table->string('passport_number')->nullable();
            $table->string('driver_licence_number')->nullable();
            $table->integer('deceased_weight'); 
            $table->integer('weight');
            /* Softdeletes */
            $table->softDeletes();
            $table->integer('created_by')->default(1);
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deceased_data');
    }
};
