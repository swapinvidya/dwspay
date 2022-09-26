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
                        'Product_cost' => null,
                        'default' => true,
                        'taxable' => true,
                        'tax'=> 10,
                        'shipping'=> true,
                        'shipping_rate' => 10,
                        'discount' =>true,
                        'discount_rate' => 10,
                        'services_inc' => null
                    ],

                    [
                        'Product_name' => 'Registration and KYC',
                        'Product_dec' => 'Basic one time Registration and KYC Fees',
                        'Product_cost' => 1000,
                        'default' => true,
                        'taxable' => true,
                        'tax'=> 18,
                        'shipping'=> false,
                        'shipping_rate' => 0,
                        'discount' =>false,
                        'discount_rate' => 10,
                        'services_inc' => null
                    ],
                    [
                        'Product_name' => 'Free Demo',
                        'Product_dec' => 'Phone Recharge ,  DTH Recharge',
                        'Product_cost' => 0,
                        'default' => true,
                        'taxable' => false,
                        'tax'=> 18,
                        'shipping'=> false,
                        'shipping_rate' => 0,
                        'discount' =>false,
                        'discount_rate' => 10,
                        'services_inc' => null
                    ],
                    [
                        'Product_name' => 'Basic Package',
                        'Product_dec' => null,
                        'Product_cost' => 0,
                        'default' => true,
                        'taxable' => false,
                        'tax'=> 18,
                        'shipping'=> false,
                        'shipping_rate' => 0,
                        'discount' =>false,
                        'discount_rate' => 10,
                        'services_inc' => null
                    ],
                    [
                        'Product_name' => 'Professional Package',
                        'Product_dec' => null,
                        'Product_cost' => 0,
                        'default' => true,
                        'taxable' => false,
                        'tax'=> 18,
                        'shipping'=> false,
                        'shipping_rate' => 0,
                        'discount' =>false,
                        'discount_rate' => 10,
                        'services_inc' => null
                    ],
                    [
                        'Product_name' => 'Ultimate Package',
                        'Product_dec' => null,
                        'Product_cost' => 0,
                        'default' => true,
                        'taxable' => false,
                        'tax'=> 18,
                        'shipping'=> false,
                        'shipping_rate' => 0,
                        'discount' =>false,
                        'discount_rate' => 10,
                        'services_inc' => null
                    ],

                ];

        DB::table('products')->insert($data);
    }
}
