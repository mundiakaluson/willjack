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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("class")->nullable();
            $table->string("category")->nullable();
            $table->string("type")->nullable();
            $table->string("alias")->nullable();
            $table->string("plot_number")->nullable();
            $table->string("country")->nullable();
            $table->string("region")->nullable();
            $table->string("town")->nullable();
            $table->string("area")->nullable();
            $table->string("physical_address")->nullable();
            $table->foreignId("office")->nullable();
            $table->foreignId("assigned_to")->nullable();
            $table->date("contract_duration_start")->nullable();
            $table->date("contract_duration_end")->nullable();
            $table->boolean("auto_renew")->nullable();
            $table->integer("agreement_fee")->nullable();
            $table->integer("commission_rate")->nullable();
            $table->integer("letting_commission_rate")->nullable();
            $table->integer("charge")->nullable();
            $table->string("vat_on_comission_mode")->nullable();
            $table->string("tenant_deposit_mode")->nullable();
            $table->string("tenant_deposit_electricity")->nullable();
            $table->string("tenant_deposit_water")->nullable();
            $table->string("tenant_deposit_others")->nullable();
            $table->string("account_name")->nullable();
            $table->date("payment_date")->nullable();
            $table->string("payment_mode")->nullable();
            $table->string("disbursment_mode")->nullable();
            $table->string("payment_branch")->nullable();
            $table->integer("payment_account_number")->nullable();
            $table->string("payment_ratio")->nullable();
            $table->integer("property_code")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
