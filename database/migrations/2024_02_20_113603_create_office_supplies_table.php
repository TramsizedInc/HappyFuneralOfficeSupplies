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
        Schema::create('office_supplies', function (Blueprint $table) {
            $table->id();
            $table->integer('amount_of_toners')->default(0);
            $table->integer('amount_of_drumms')->default(0);
            $table->integer('level_of_toners')->default(100);
            $table->integer('level_of_drumms')->default(100);            /* Softdeletes */
            /**softdelets trait */
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
        Schema::dropIfExists('office_supplies');
    }
};
