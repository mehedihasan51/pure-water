<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
          [  
            'id'  =>   1,
           'firstName'  =>   'admin',
            'lastName'    => 'admin',
            'email'     =>   'admin@admin.com',
            'email_verified_at' => Carbon::now(),
            'phone_number'       => '0123456789',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
            'status' => 'active',
            'remember_token' => null,
        ],
        [
            'id'  =>  2,
           'firstName'  =>  'user',
           'lastName'   =>  'user',
            'email' => 'user@user.com',
            'email_verified_at' => Carbon::now(),
            'phone_number'      => '1234567890',
            'password' => Hash::make('12345678'),
            'role' => 'user',
            'status' => 'active',
            'remember_token' => null,
            ],
        ]);
    }
}
