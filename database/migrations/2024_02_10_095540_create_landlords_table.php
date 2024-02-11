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
        Schema::create('landlords', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId("property");
            $table->string("first_name");
            $table->string("last_name");
            $table->string("initials")->nullable();
            $table->string("pin_number")->nullable();
            $table->string("vat_number")->nullable();
            $table->string("postal_address")->nullable();
            $table->string("email")->nullable();
            $table->string("phone_number")->nullable();
            $table->string("alternative_phone_number")->nullable();
            $table->string("nominated_signatory_initials")->nullable();
            $table->string("nominated_signatory_first_name")->nullable();
            $table->string("nominated_signatory_id_number")->nullable();
            $table->string("nominated_signatory_number")->nullable();
            $table->string("nominated_signatory_designations")->nullable();
            $table->string("nominated_signatory_initials")->nullable();
            $table->string("nominated_signatory_first_name")->nullable();
            $table->string("nominated_signatory_last_name")->nullable();
            $table->string("nominated_signatory_id")->nullable();
            $table->string("nominated_signatory_number")->nullable();
            $table->string("nominated_signatory_designation")->nullable();
            $table->string("next_of_kin_initials")->nullable();
            $table->string("next_of_kin_first_name")->nullable();
            $table->string("next_of_kin_last_name")->nullable();
            $table->string("next_of_kin_id_number")->nullable();
            $table->string("next_of_kin_phone_number")->nullable();
            $table->string("next_of_kin_relation")->nullable();
            $table->string("office")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landlords');
    }
};
