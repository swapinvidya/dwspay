<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $data =[    
                    [
                        'rolename' => 'Super Admin',
                        'create_superdist' => true,
                        'create_dist' => true,
                        'create_apipartner'=> true,
                        'create_retailer' => true,
                        'no_superdist' => 20000,
                        'no_dist'=> 20000,
                        'no_apipartner'=> 20000,
                        'no_retailer'=> 10000,
                    ],

                    [
                        'rolename' => 'Admin',
                        'create_superdist' => true,
                        'create_dist' => true,
                        'create_apipartner'=> true,
                        'create_retailer' => true,
                        'no_superdist' => 2,
                        'no_dist'=> 5,
                        'no_apipartner'=> 2,
                        'no_retailer'=> 10,
                    ],
                    
                    [
                        'rolename' => 'Super Distributer',
                        'create_superdist' => false,
                        'create_dist' => true,
                        'create_apipartner'=> false,
                        'create_retailer' => true,
                        'no_superdist' => 0,
                        'no_dist'=> 5,
                        'no_apipartner'=> 0,
                        'no_retailer'=> 10,
                    ],

                    [
                        'rolename' => 'Distributer',
                        'create_superdist' => false,
                        'create_dist' => false,
                        'create_apipartner'=> false,
                        'create_retailer' => true,
                        'no_superdist' => 0,
                        'no_dist'=> 0,
                        'no_apipartner'=> 0,
                        'no_retailer'=> 10,
                    ],

                    [
                        'rolename' => 'API Partner',
                        'create_superdist' => true,
                        'create_dist' => true,
                        'create_apipartner'=> false,
                        'create_retailer' => true,
                        'no_superdist' => 2,
                        'no_dist'=> 5,
                        'no_apipartner'=> 0,
                        'no_retailer'=> 10,
                    ],

                    [
                        'rolename' => 'Retailer',
                        'create_superdist' => false,
                        'create_dist' => false,
                        'create_apipartner'=> false,
                        'create_retailer' => false,
                        'no_superdist' => 0,
                        'no_dist'=> 0,
                        'no_apipartner'=> 0,
                        'no_retailer'=> 0,
                    ],



                ];
                
        DB::table('userroles')->insert($data);
    }
}
