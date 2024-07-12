<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->string('pre_feasibility')->nullable();
            $table->string('feasibility')->nullable();
            $table->string('detailed_design')->nullable();
            $table->string('sea')->nullable();
            $table->string('iee')->nullable();
            $table->string('eia')->nullable();
            $table->string('disaster_risk')->nullable();
            $table->string('nbro_clearance')->nullable();
            $table->string('archeological_clearance')->nullable();
            $table->string('land_clearance')->nullable();
            $table->string('social_impact')->nullable();
            $table->string('other')->nullable();
            $table->timestamps();

            // Foreign key constraint
        });
    }

    public function down()
    {
        Schema::dropIfExists('activities');
    }
}


