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
        Schema::create('milestones', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('target_id');
            $table->string('name');
            $table->text('description');
            $table->string('status');
            $table->date('start_date');
            $table->date('due_date');
            $table->timestamps();
            $table->foreign('target_id')->references('id')->on('targets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('milestones');
    }
};
