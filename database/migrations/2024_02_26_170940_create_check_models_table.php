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
        Schema::create('check_models', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->dateTime('exhibition_date');
            $table->integer('amount_to_be_paid');
            $table->string('customer_code');
            $table->string('street_name');
            $table->string('zip_code');
            $table->integer('amount_used');
            $table->dateTime('yearly_check_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_models');
    }
};
