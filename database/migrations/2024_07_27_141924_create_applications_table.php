<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('JobID')->constrained('jobs');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('ResumeID')->constrained('resumes');
            $table->timestamp('ApplicationDate')->useCurrent();
            $table->enum('Status', ['Applied', 'Reviewed', 'Interviewing', 'Offered', 'Rejected'])->default('Applied');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
