<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Application;
use App\Models\Job;
use App\Models\User;
use App\Models\Resume;

class ApplicationSeeder extends Seeder
{
    public function run()
    {
        Application::firstOrCreate([
            'JobID' => Job::where('JobTitle', 'Software Engineer')->first()->id,
            'user_id' => User::where('Email', 'alice@example.com')->first()->id,
            'ResumeID' => 1,
        ], [
            'Status' => 'Applied',
        ]);
    }
}
