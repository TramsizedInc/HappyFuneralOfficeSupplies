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
            $table->DateTime('exhibition_date');
            $table->DateTime('hv_done_status_date');
            $table->DateTime('hv_have_status_date');
            $table->DateTime('hv_exhibition_date');
            $table->string('choosen_krematori'); //Választott krematorium
            $table->string('urn_inside_form'); //Urnabetét formája
            $table->string('choosen_cremetory'); //Választott temető
            $table->string('location'); //elhelyezés:sírba,falba,szorva
            $table->string('new_or_old');
            $table->string('tombstone_number'); //sírhely száma
            $table->DateTime('date_of_funeral');
            $table->string('hour_and_minute_of_funeral');
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
