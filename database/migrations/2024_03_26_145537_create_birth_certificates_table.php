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
        Schema::create('birth_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('order_uuid');
            $table->string('name_on_birth_c')->nullable();
            $table->string('degree')->nullable(); //Végzettség
            $table->string('job')->nullable();
            $table->integer('child_count')->nullable(); //Gyerekek száma
            $table->string('degree_of_relative')->nullable(); //Rokonsági fok
            $table->string('death_place')->nullable(); //Város,kerület
            $table->string('ash_storage_place')->nullable(); //Hamvak tárolási helye
            $table->string('deceased_birth_certificate_number')->nullable();
            $table->string('wedding_birth_certificate_number')->nullable();
            $table->string('wedding_date_and_place')->nullable(); //A fennálló vagy a megszűnt házasságkötés megkötésének helye és ideje:
            $table->boolean('divorced_or_not')->nullable();
            $table->integer('dead_husbands_count')->nullable(); //Elh házastárs Hak száma:
            $table->string('legally_binding_autopsy_number')->nullable();   //Jogerős bonc ítélet száma:
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
        Schema::dropIfExists('birth_certificates');
    }
};
