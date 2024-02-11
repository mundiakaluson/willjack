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
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("short_code")->nullable();
            $table->boolean("auto_renew");
            $table->string("tenant_code")->nullable();
            $table->string("first_name");
            $table->string("last_name");
            $table->date("lease_start_date");
            $table->date("lease_end_date");
            $table->string("id_number");
            $table->string("phone_number");
            $table->string("alternate_phone_number")->nullable();
            $table->string("postal_address")->nullable();
            $table->string("town")->nullable();
            $table->string("occupation")-nullable();
            $table->string("email")->nullable();
            $table->string("letting_type")->nullable();
            $table->string("schedule_increment")->nullable();
            $table->date("first_incrememnt")->nullable();
            $table->date("reporting_date")->nullable();
            $table->integer("agreement_fee")->nullable();
            $table->integer("letting_fee")->nullable();
            $table->string("agreement_fee_description")->nullable();
            $table->integer("landlord_letting_commission")->nullable();
            $table->date("rent_due_date")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
