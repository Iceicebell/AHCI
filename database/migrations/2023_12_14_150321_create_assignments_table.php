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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id('assignment_id');
            $table->string('assignment_name');
            $table->string('description');
            $table->date('due_date');
            $table->foreignId('coord_id');
            $table->foreignId('proj_id');
            $table->foreign('proj_id')->references('proj_id')->on('projects');
            $table->foreign('coord_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
