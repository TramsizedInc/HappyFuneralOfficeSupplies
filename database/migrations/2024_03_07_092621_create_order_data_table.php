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
        Schema::create('order_data', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('customer_id')->after('id')->references('id')->on('customer_data')->constrained();
            // $table->foreignId('deceased_id')->after('id')->references('id')->on('deceased_data')->constrained();
            // $table->foreignId('urn_id')->default(1)->after('id')->references('id')->on('unrs')->constrained();
            // $table->foreignId('urn_kiad_id')->after('id')->references('id')->on('_urn_k_i_a_datas')->constrained();
            // $table->foreignId('urn_insert_id')->after('id')->references('id')->on('urn_inserts')->constrained();
            $table->integer('customer_data_id');
            $table->integer('deceased_data_id');
            $table->integer('_urn_k_i_a_datas_id');
            $table->integer('birth_certificate_id');
            /** soft deletes trait */
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
        Schema::dropIfExists('order_data');
    }
};
