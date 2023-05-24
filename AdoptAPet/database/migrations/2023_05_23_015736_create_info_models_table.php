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
        Schema::create('info_models', function (Blueprint $table) {
            $table->id();
            $table->string('phone_valid');
            $table->string('phone_country');
            $table->string('carrier');
            $table->string('phone_type');
            $table->string('international_number');
            $table->string('local_number');
            $table->string('phone_e164');
            $table->string('phone_region');
            $table->string('country_prefix');
            $table->string('country_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_models');
    }
};
