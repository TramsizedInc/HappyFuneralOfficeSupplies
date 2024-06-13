<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hutos_idos', function (Blueprint $table) {
            $table->id();
            $table->string('kh_name');
            $table->integer('atal1');
            $table->integer('atal2');
            $table->integer('pot');
            $table->integer('atal1_ar');
            $table->integer('atal2_ar');
            $table->integer('pot_ar');
            $table->integer('pot_ar2')->nullable();
            $table->string('plusz_koltsseg')->nullable();
            $table->integer('plusz_koltsseg_ar')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hutos_idos');
    }
};
