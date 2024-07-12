<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('project_details', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sector');
            $table->string('province');
            $table->string('district');
            $table->string('gs_division');
            $table->string('gn_division');
            $table->string('land_area');
            $table->string('land_location');
            $table->string('ownership_details');
            $table->string('land_purchase');
            $table->string('land_cost');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('project_details');
    }
}
