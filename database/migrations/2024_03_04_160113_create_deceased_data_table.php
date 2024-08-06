<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Null_;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('deceased_datas', function (Blueprint $table) {
            $table->id();
            $table->string('exhibiting_office')->nullable();
            $table->string('deceased_name_prefix')->default('Null');
            $table->string('deceased_first_name')->nullable();
            $table->string('deceased_last_name')->nullable();
            $table->string('order_uuid');

            $table->string('birth_name')->nullable();
            $table->string('mother_name')->nullable();
            // livin' location
            $table->string('zip_code')->nullable();
            $table->string('street')->nullable();
            $table->string('house_number')->nullable();

            $table->string('hospital_code')->nullable();
            $table->DateTime('deceased_birth_day')->nullable();
            $table->string('deceased_birth_place')->nullable();
            $table->string('death_place')->nullable();
            $table->DateTime('death_time')->nullable();
            $table->DateTime('exhibiton_time')->nullable();
            $table->string('pensioner_id')->nullable();
            $table->string('id_card_number')->nullable();
            $table->string('address_id_number')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('driver_licence_number')->nullable();
            $table->integer('deceased_weight')->nullable();
            $table->integer('weight')->nullable();
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
        Schema::dropIfExists('deceased_datas');
    }
};
