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
        Schema::create('origin_countries', function (Blueprint $table) {
            $table->id();
            $table->string('country_code', 3);
            $table->string('country_name', 255);
            $table->unique(['country_code', 'country_name']);
            $table->integer('cbam');
            $table->integer('import_country');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('origin_countries');
    }
};
