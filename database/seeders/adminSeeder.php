<?php

namespace Database\Seeders;

use App\Models\barcode;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'address' => 'Dhaka',
            'phone' => '0111',
            'role_id' => 1,
        ]);
        User::create([

            'name' => 'chef',
            'email' => 'chef@gmail.com',
            'password' => Hash::make('chef123'),
            'address' => 'Dhaka',
            'phone' => '0111',
            'role_id' => 3,
        ]);
        barcode::create([
            'number'=> '12345678912'
        ]);
    }
}
