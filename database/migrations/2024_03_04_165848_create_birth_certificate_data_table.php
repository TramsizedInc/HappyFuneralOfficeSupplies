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
        Schema::create('birth_certificate_data', function (Blueprint $table) {
            $table->id();
            $table->string('degree'); //Végzettség
            $table->string('job');
            $table->integer('child_count'); //Gyerekek száma
            $table->string('degree_of_relative'); //Rokonsági fok
            $table->string('death_place'); //Város,kerület
            $table->string('ash_storage_place'); //Hamvak tárolási helye
            $table->string('deceased_birth_certificate_number');
            $table->string('wedding_birth_certificate_number');
            $table->string('wedding_date_and_place')->nullable(); //A fennálló vagy a megszűnt házasságkötés megkötésének helye és ideje:
            $table->boolean('divorced_or_not');
            $table->integer('dead_husbands_count'); //Elh házastárs Hak száma:
            $table->string('legally_binding_autopsy_number');   //Jogerős bont ítélet száma:
            $table->string('selfemployee_tax_number')->nullable();  //Vállalkozói adószám:
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
        Schema::dropIfExists('birth_certificate_data');
    }
};
