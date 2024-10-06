<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;
use App\Models\Company;
use App\Models\JobCategory;
use App\Models\JobLocation;

class JobSeeder extends Seeder
{
    public function run()
    {
        $company1 = Company::firstOrCreate(['CompanyName' => 'Tech Innovators Inc.'], [
            'location' => 'San Francisco',
            'industry' => 'Technology',
            'website' => 'https://techinnovators.com'
        ]);

        $company2 = Company::firstOrCreate(['CompanyName' => 'Product Solutions LLC'], [
            'location' => 'New York',
            'industry' => 'Product Development',
            'website' => 'https://productsolutions.com'
        ]);

        $category1 = JobCategory::firstOrCreate(['CategoryName' => 'Engineering']);
        $category2 = JobCategory::firstOrCreate(['CategoryName' => 'Marketing']);

        $location1 = JobLocation::firstOrCreate(['City' => 'San Francisco']);
        $location2 = JobLocation::firstOrCreate(['City' => 'New York']);

        Job::create([
            'CompanyID' => $company1->id,
            'JobTitle' => 'Software Engineer',
            'JobDescription' => 'Develop and maintain web applications.',
            'JobType' => 'Full-Time',
            'CategoryID' => $category1->id,
            'LocationID' => $location1->id,
            'Salary' => 80000.00,
        ]);

        Job::create([
            'CompanyID' => $company2->id,
            'JobTitle' => 'Product Manager',
            'JobDescription' => 'Oversee the development and launch of new products.',
            'JobType' => 'Full-Time',
            'CategoryID' => $category2->id,
            'LocationID' => $location2->id,
            'Salary' => 95000.00,
        ]);
    }
}
