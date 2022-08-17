<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Super Admin',
                'email' => 'dr.swapin@gmail.com',
                'password' => Hash::make('swapinvidya_100'),
                'role_id' => 1
            ],
            
            [
            'name' => 'Admin',
            'email' => 'admin@dwspay.com',
            'password' => Hash::make('reset123'),
            'role_id' => 2
            ]
        ]);
    }
}
