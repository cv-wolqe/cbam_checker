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
        Schema::create('emissions', function (Blueprint $table) {
            $table->id();
            $table->integer('cn_code')->unique();
            $table->float('direct_emission')->nullable();
            $table->float('indirect_emission')->nullable();
            $table->float('total_emission')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emissions');
    }
};
