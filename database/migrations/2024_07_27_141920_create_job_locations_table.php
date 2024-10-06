<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('job_locations', function (Blueprint $table) {
            $table->id();
            $table->string('City', 100);
            $table->string('State', 100)->nullable();
            $table->string('Country', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_locations');
    }
}
