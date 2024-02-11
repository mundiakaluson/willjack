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
        Schema::create('nominated_signatories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId("user_id")->nullable();
            $table->string("first_name");
            $table->string("last_name");
            $table->string("initials");
            $table->string("id_number");
            $table->string("phone_number");
            $table->string("designation");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nominated_signatories');
    }
};
