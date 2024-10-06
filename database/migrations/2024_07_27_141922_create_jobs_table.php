<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('CompanyID')->constrained('companies');
            $table->string('JobTitle', 100);
            $table->text('JobDescription');
            $table->enum('JobType', ['Full-Time', 'Part-Time', 'Contract', 'Internship', 'Temporary']);
            $table->foreignId('CategoryID')->constrained('job_categories');
            $table->foreignId('LocationID')->constrained('job_locations');
            $table->decimal('Salary', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
