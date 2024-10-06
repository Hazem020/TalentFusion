<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobCategory;

class JobCategorySeeder extends Seeder
{
    public function run()
    {
        JobCategory::firstOrCreate(['CategoryName' => 'Engineering']);
        JobCategory::firstOrCreate(['CategoryName' => 'Marketing']);
        JobCategory::firstOrCreate(['CategoryName' => 'Sales']);
    }
}
