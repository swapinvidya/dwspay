<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
                    [
                        'Product_name' => 'Wallet topup',
                        'Product_dec' => 'Internal Vertual wallet topup',
                        'Product_cost' => null
                    ],

                    [
                        'Product_name' => 'One Time Registration',
                        'Product_dec' => 'One Time Registartion and KYC Charges',
                        'Product_cost' => 100
                    ],
                ];

        DB::table('products')->insert($data);
    }
}
