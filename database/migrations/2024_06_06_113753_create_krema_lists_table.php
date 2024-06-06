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
        Schema::create('krema_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('kream_nap');
            $table->integer('vissza_száll');
            $table->integer('kr_hutes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('krema_lists');
    }
};
