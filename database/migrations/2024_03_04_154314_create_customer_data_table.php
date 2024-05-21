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
        Schema::create('customer_data', function (Blueprint $table) {
            $table->id();
            $table->string('customer');
            $table->string('born_name');
            $table->string('address');
            $table->string('mother_name');
            $table->string('birth_place_with_birth_day')->nullable();
            $table->bigInteger('mobile_number');
            $table->string('email');
            $table->string('id_card_number'); //example:456456LL
            $table->timestamp('id_card_expire_date');
            $table->string('id_card_exhibition_place'); //example:Budapest
            $table->string('exhibiting_office'); //igazolványt kiállító szerv
            $table->string('address_id_number'); 
            $table->DateTime('customer_birth_day');
            $table->string('birth_place');
            // livin' location
            $table->string('city');
            $table->string('nation');
            $table->string('zip_code');
            $table->string('street');
            $table->string('house_number');
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
        Schema::dropIfExists('customer_data');
    }
};
