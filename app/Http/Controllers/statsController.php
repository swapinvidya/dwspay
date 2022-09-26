<?php

namespace App\Http\Controllers;

use App\Models\services;
use App\Models\User;
use App\Models\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class statsController extends Controller
{
    public function charts(Request $request){
        $id = $request->input('id');

        $srv_array = UserService::where('created_at', '>=', Carbon::now()->subMonth())->pluck('Service_id')->toArray();
        foreach($srv_array as $a){
            $srv = services::find($a)->catagory;
            $sev_arr[] = array($srv);
            
        }

        $arofar = call_user_func_array("array_merge", $sev_arr);

        $ar = array_replace($arofar,array_fill_keys(array_keys($arofar, null),''));
        $result = array_count_values($ar);

//   "BANKING" => 4
//   "PAYMENTS" => 6
//   "OTHERS" => 2
//   "TRAVEL" => 2
//   "INSURANCE" => 1

//now datewise 

//dd($result, array_values($result) );
        $a = [
            array_values($result),
            array_values($result),
            array_values($result),
        ];
        return $a;
    }

    public function topUsers(){
        $users = User::all('id','name','email');
        return response($users);


    }
}
