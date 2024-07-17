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
        Schema::create('mdas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('department_id');
            $table->bigInteger('user_id');
            $table->string('title');
            $table->string('firstnames');
            $table->string('surname');
            $table->timestamps();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mdas');
    }
};
