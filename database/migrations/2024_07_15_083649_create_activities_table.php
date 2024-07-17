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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('milestone_id');
            $table->string('name');
            $table->text('description');
            $table->string('status');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('actual_end_date')->nullable();
            $table->timestamps();
            $table->foreign('milestone_id')->references('id')->on('milestones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
