<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    public function run()
    {
        Company::firstOrCreate([
            'CompanyName' => 'Tech Innovators Inc.',
        ], [
            'Description' => 'Technology',
            'Website' => 'https://techinnovators.com',
        ]);

        Company::firstOrCreate([
            'CompanyName' => 'Product Solutions LLC',
        ], [
            'Description' => 'Product Development',
            'Website' => 'https://productsolutions.com',
        ]);
    }
}
