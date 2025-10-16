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
        Schema::create('cn_codes', function (Blueprint $table) {
            $table->integer('main_category_id');
            $table->integer('aggregated_category_id');
            $table->integer('cn_code')->unique();
            $table->text('product_name');
            $table->boolean('cbam_applies');
            $table->boolean('indirect_emmission');
            $table->integer('quantity_id');
            $table->integer('country_id');
            $table->integer('installation_id');
            $table->text('special_provisions')->nullable();
            $table->text('production_route')->nullable();
            $table->text('production_route_old')->nullable();
            $table->text('precursors')->nullable();
            $table->text('extra_data')->nullable();
            $table->text('indirect_emission_data')->nullable();
            $table->text('data_quality')->nullable();
            $table->boolean('carbon_price_abroad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cn_codes');
    }
};
