<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\services;
use App\Models\UserService;
use App\Models\welletRequests;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class purcheseController extends Controller
{
    public function buyService(Request $request){
        $item = services::find($request->input('id'));
        $user = Auth::user();
        $months = 6;
        try {
            $pay = $user->pay($item);
            $msg = $pay;
            $walbal = $user->balance;
            //==================================
            // credit the services to user account
            $date = Carbon::now();

           UserService::create([
            'User_id' => $user->id,
            'Service_id' => $request->input('id'),
            'Start_date' => $date,
            'Exp_date' => $date->addMonths($months),
            'uuid' => $pay->uuid ,
           ]);         



            //======================================


            return response()->json(
                array('success' => 'true',
                        'icon' => $item->image,
                        'name' => $item->Name,
                        'catagory'=> $item->catagory,
                        'cost' =>$item->cost,
                        'msg'=> $msg ,
                        'bal' => $walbal,
                        'id'=> $request->input('id'))
                        , 200);

        } catch (Exception $e) {
            return response()->json([
                'success' => 'false',
                'errors'  => $e->getMessage(),
            ], 400);
        }
        
    }

    public function walletRequest (Request $request){
        $amt = $request->input('name');
        $user_id = $request->input('id');

        $user = Auth::user();


        // try{
        //     $user->deposit($amt);
        // }
        // catch(Exception $e){
        //     return response()->json([
        //         'success' => 'false',
        //         'Error'  => 'Illegal Action',
        //         ], 400);
        // }
        

        $check = welletRequests::create([
            'user_id' => $user_id,
            'amount'=> $amt,
        ]);

        if ($check){
            return response()->json([
                'success' => 'true',
                'Amount'  => $amt,
                'bal' => Auth::user()->balance,
                ], 200);
        }else{
            return response()->json([
                'success' => 'false',
                'Error'  => 'Server Busy',
                ], 400);
        }
    }
}
