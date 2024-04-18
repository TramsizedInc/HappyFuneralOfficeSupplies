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
    { //urnakiadas 
        Schema::create('_urn_k_i_a_datas', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_deceased');
            $table->DateTime('exhibition_date')->nullable();
            $table->DateTime('hv_done_status_date')->nullable();
            $table->DateTime('hv_have_status_date')->nullable();
            $table->DateTime('hv_exhibition_date')->nullable();
            $table->string('choosen_chrematory')->nullable(); //Választott krematorium
            $table->string('urn_inside_form')->nullable(); //Urnabetét formája
            $table->string('choosen_cemetary')->nullable(); //Választott temető
            $table->string('location')->nullable(); //elhelyezés:sírba,falba,szorva
            $table->string('new_or_old')->nullable();
            $table->string('tombstone_number')->nullable(); //sírhely száma
            $table->DateTime('date_of_funeral')->nullable();
            $table->string('hour_and_minute_of_funeral')->nullable();
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
        Schema::dropIfExists('_urn_k_i_a_data');
    }
};
