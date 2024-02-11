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
        Schema::create('property_units', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId("property_id");
            $table->tinyInteger("block")->nullable();
            $table->tinyInteger("floor")->nullable();
            $table->tinyText("label")->nullable();
            $table->string("class")->nullable();
            $table->string("type")->nullable();
            $table->string("fit_out")->nullable();
            $table->boolean("managed")->nullable();
            $table->tinyInteger("size")->nullable();
            $table->tinyInteger("beds")->nullable();
            $table->tinyInteger("baths")->nullable();
            $table->boolean("status")->nullable();
            $table->mediumText("description")->nullable();
            $table->integer("rent_amount")->nullable();
            $table->integer("rent_deposit")->nullable();
            $table->integer("electricity_deposit")->nullable();
            $table->integer("water_deposit")->nullable();
            $table->integer("other_deposit")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_units');
    }
};
