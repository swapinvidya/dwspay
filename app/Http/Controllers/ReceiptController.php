<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ReceiptController extends Controller
{
    public function RecptGenarate(Request $request){
        $tx = Payment::where('user_id',$request->input('id'))->where('uuid',$request->tx)->first();
        if ($tx == null){
            $request->session()->flash('notification', true);
            $request->session()->flash('title', "No Receipt found!");
            $request->session()->flash('message' , 'No details avilable may be old or invalid data');
            $request->session()->flash('alert_type' , 'danger');
            return redirect()->back();
        }
        $product = Product::find($tx->product_id);


        if ( $product->Product_cost == null){
        // Payload for Invoice API
            $item =[
                    [
                        "name" => $product->Product_name ,
                        "description" => $product->Product_dec,
                        "quantity" =>1,
                        "unit_cost"=> $tx->amount
                    ],

                 ];

            $tax =  [
                    "tax" => "%",
                    "discounts" =>  false,
                    "shipping" => false
                    ];

            $cust_fields = [
                    [
                        "name" => "R.Pay",
                        "value" => $tx->r_payment_id
                    ]

                ];

            
            $field = [
               "from"=>"SP MANAGERS \n TRIUVANANTHAPURAM IN. \n GSTN : AHSHSH564JJ",
               "to" => Auth::user()->name,
               "logo" => "https://cutewallpaper.org/24/cd-logo-png/in-our-2016-software-development-trends-report-container-ci-cd-logo--free-transparent-png-clipart-images-download.png",
               "number" => $tx->id,
               "currency" => "INR",
               "date" => $tx->updated_at->format('d-m-Y'),
               "payment_terms" => "Charged - Do Not Pay",
               "custom_fields" => $cust_fields,
               "tax_title" => "GST",
               "shipping_title" => "Gateway Charges",
               "items" => $item,
               "fields" => $tax,
                "tax"=>8,
                "shipping" => ($tx->amount*8)/100,
               "notes" => "Thanks for your business!",
               "terms" => "No need to submit payment. You will be auto-billed for this invoice."
            ];

            //dd(json_encode($field));
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://invoice-generator.com');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($field));
            $headers = array();
            $headers[] = 'Content-Type: application/json';
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            
            $result = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            curl_close($ch);

            $file_name = "receipt_".$tx->uuid.".pdf";

           //store to folder
            Storage::disk('local')->put( "/receipts/".$file_name, $result);
            
            return Storage::download("/receipts/".$file_name);
            
        } else
        {
            dd("product Not Registred");
        }
    }
}
//(c) all rights resrved SWAPIN VIDYA modification not permitted