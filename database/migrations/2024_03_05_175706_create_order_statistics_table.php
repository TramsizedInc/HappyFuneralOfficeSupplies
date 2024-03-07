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
        Schema::create('order_statistics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->foreignId('order_id')->after('id')->references('id')->on('order_data')->constrained()->nullable();
            $table->integer('profit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_statistics');
    }
};
