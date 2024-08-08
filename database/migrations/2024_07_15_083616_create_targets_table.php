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
        Schema::create('targets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mda_id');
            $table->bigInteger('quarter_id');
            $table->string('name');
            $table->text('description');
            $table->string('status');
            $table->date('start_date');
            $table->date('due_date');
            $table->timestamps();
            $table->foreign('mda_id')->references('id')->on('mdas')->onDelete('cascade');
            $table->foreign('quarter_id')->references('id')->on('quarters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('targets');
    }
};
