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

            $table->string('order_uuid')->nullable();

            $table->string('customer_first_name')->nullable();
            $table->string('customer_last_name')->nullable();
            $table->string('customer_id_card_number')->nullable();
            $table->string('born_name')->nullable();
            $table->string('address')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('birth_place_with_birth_day')->nullable();
            $table->bigInteger('mobile_number')->nullable();
            $table->string('email')->nullable();
            $table->string('id_card_number')->nullable(); //example:456456LL
            $table->timestamp('id_card_expire_date')->nullable();
            $table->string('id_card_exhibition_place')->nullable(); //example:Budapest
            $table->string('exhibiting_office')->nullable(); //igazolványt kiállító szerv
            $table->string('address_id_number')->nullable(); 
            $table->DateTime('customer_birth_day')->nullable();
            $table->string('birth_place')->nullable();
            // livin' location
            $table->string('city')->nullable();
            $table->string('nation')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('street')->nullable();
            $table->string('house_number')->nullable();

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
