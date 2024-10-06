<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::firstOrCreate([
            'Email' => 'alice@example.com'
        ], [
            'UserName' => 'AliceSmith',
            'password' => Hash::make('password'),
            'UserType' => 'JobSeeker',
        ]);

        User::firstOrCreate([
            'Email' => 'bob@example.com'
        ], [
            'UserName' => 'BobJohnson',
            'password' => Hash::make('password'),
            'UserType' => 'Employer',
        ]);
    }
}
