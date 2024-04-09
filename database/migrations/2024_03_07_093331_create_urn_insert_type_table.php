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
         Schema::create('urn_insert_types', function (Blueprint $table) {
             $table->id();
             $table->string('name');
             $table->integer('normal_price');
             $table->integer('selling_price');
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
        Schema::dropIfExists('urn_insert_types');
    }
};
