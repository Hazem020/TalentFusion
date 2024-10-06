<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobLocation;

class JobLocationSeeder extends Seeder
{
    public function run()
    {
        JobLocation::firstOrCreate(['City' => 'New York', 'State' => 'NY', 'Country' => 'USA']);
        JobLocation::firstOrCreate(['City' => 'San Francisco', 'State' => 'CA', 'Country' => 'USA']);
    }
}
