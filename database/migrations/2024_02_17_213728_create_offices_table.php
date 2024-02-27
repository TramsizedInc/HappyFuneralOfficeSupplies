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
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->string('office_name');
            $table->string('office_manager');
            $table->string('zip_code');
            $table->string('city');
            $table->string('street');
            $table->string('house_number');
            $table->integer('number_of_workers');
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
        Schema::dropIfExists('offices');
    }
};
