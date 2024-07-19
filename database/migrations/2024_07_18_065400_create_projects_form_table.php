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
        Schema::create('projects_form', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('project_id');
            $table->string('project_name');
            $table->string('submitted_by');
            $table->date('submitted_date');
            $table->date('closing_date');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects_form');
    }
};
