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
        Schema::table('cn_codes', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('quantity_id')->change();
            $table->foreign('quantity_id')->references('id')->on('quantities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cn_codes', function (Blueprint $table) {
            //
        });
    }
};
