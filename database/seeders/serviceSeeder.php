<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class serviceSeeder extends Seeder
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
                'Name' =>'AEPS',
                'catagory' =>'BANKING',
                'essentail' => true ,
                'image'=>"./servimg/aeps.png"
            ],

            [ 

                'Name' =>'Domastic Money Remittence',
                'catagory' =>'BANKING',
                'essentail' => true ,
                'image'=>"./servimg/dmr.png"
            ],

            [
                'Name' =>'QR Code',
                'catagory' =>'BANKING',
                'essentail' => true ,
                'image'=>"./servimg/QR Code.png"
            ],

            [
                'Name' =>'Micro ATM Device',
                'catagory' =>'BANKING',
                'essentail' => true ,
                'image'=>"./servimg/Microatm.png"
            ],

            [
                'Name' =>'BILL PAYMENTS',
                'catagory' =>'PAYMENTS',
                'essentail' => true ,
                'image'=>"./servimg/billpayment.png"
            ],

            [
                'Name' =>'CASH MANAGEMENT SERVICE',
                'catagory' =>'PAYMENTS',
                'essentail' => true ,
                'image'=>"./servimg/cashmanagement.png"
            ],

            [
                'Name' =>'AADHAR ATM',
                'catagory' =>'PAYMENTS',
                'essentail' => true ,
                'image'=>"./servimg/aadharatm.png"
            ],

            [
                'Name' =>'DTH Recharge',
                'catagory' =>'PAYMENTS',
                'essentail' => true ,
                'image'=>"./servimg/DTH.png"
            ],

            [
                'Name' =>'Mobile Recharge',
                'catagory' =>'PAYMENTS',
                'essentail' => true ,
                'image'=>"./servimg/mobile.png"
            ],

            [
                'Name' =>'Air Tickets',
                'catagory' =>'TRAVEL',
                'essentail' => true ,
                'image'=>"./servimg/air.png"
            ],

            [
                'Name' =>'Bus Tickets',
                'catagory' =>'TRAVEL',
                'essentail' => true ,
                'image'=>"./servimg/bus.png"
            ],

            [
                'Name' => 'Rail Tickets',
                'catagory' =>'TRAVEL',
                'essentail' => true ,
                'image'=>"./servimg/rail.png"
            ],

            [
                'Name' => 'Insurance POS',
                'catagory' =>'INSURANCE',
                'essentail' => true ,
                'image'=>"./servimg/insurancepos.png"
            ],

            
            [
                'Name' => 'Health Insurance',
                'catagory' =>'INSURANCE',
                'essentail' => true ,
                'image'=>"./servimg/health.png"
            ],

            [
                'Name' => 'Vechile Insurance',
                'catagory' =>'INSURANCE',
                'essentail' => true ,
                'image'=>"./servimg/vechile.png"
            ],

            [
                'Name' => 'Life Insurance',
                'catagory' =>'INSURANCE',
                'essentail' => true ,
                'image'=>"./servimg/life.png"
            ],


            [
                'Name' => 'Amazon Shopping',
                'catagory' =>'OTHERS',
                'essentail' => true ,
                'image'=>"./servimg/Amazone.png"
            ],
            [
                'Name' => 'Pan Card',
                'catagory' =>'OTHERS',
                'essentail' => true ,
                'image'=>"./servimg/pancard.png"
            ],
            [
                'Name' => 'API',
                'catagory' =>'OTHERS',
                'essentail' => true ,
                'image'=>"./servimg/api.png"
            ],
            [
                'Name' => 'Fastag',
                'catagory' =>'OTHERS',
                'essentail' => true ,
                'image'=>"./servimg/fastag.png"
            ],
            [
                'Name' => 'Income Tax Return',
                'catagory' =>'OTHERS',
                'essentail' => true ,
                'image'=>"./servimg/incometax.png"
            ],
        ];

        DB::table('services')->insert($data);
    }
}
