<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserService;

class ServicesController extends Controller
{
    public function index (Request $request){
        $user = Auth::user();
        $service_id = $request->input('id');
        $user_services =  UserService::where('user_id',$user->id)->pluck('service_id')->toArray();
        $subcribedServices_dates = UserService::where('user_id',$user->id)->get();
        if (!in_array($service_id , $user_services)){
                dd("illegal Action");
            }
        else{
            $service = services::find($service_id);
            return view('services.service',compact(['service','user_services','subcribedServices_dates']));
            }
    }
}
