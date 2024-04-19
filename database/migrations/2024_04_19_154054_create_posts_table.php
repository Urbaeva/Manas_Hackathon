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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_tr');
            $table->longText('description');
            $table->longText('description_tr');
            $table->unsignedBigInteger('faculty_id');
            $table->date('deadline');
            $table->foreign('faculty_id')->references('id')->on('faculties');
            $table->index('faculty_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
