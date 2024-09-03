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
        Schema::create('target_quarters', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('target_id');
            $table->bigInteger('quarter_id');
            $table->timestamps();
            $table->foreign('target_id')->references('id')->on('targets')->onDelete('cascade');
            $table->foreign('quarter_id')->references('id')->on('quarters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('target_quarters');
    }
};
