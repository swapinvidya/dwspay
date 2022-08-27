<?php

namespace App\Http\Controllers\Retailer;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\services;
use App\Models\UserService;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }

      public function index() {
        $services = services::all();
        $subcribedServices = UserService::where('user_id',Auth::id())->pluck('service_id')->toArray();
        return view('dashboard.retailer.retailerDashboard',compact(['services','subcribedServices']));
      }

      public function essentail() {
        $essentailServices = services::where('essentail',true)->get();
        $subcribedServices = UserService::where('user_id',Auth::id())->pluck('service_id')->toArray();
        return view('dashboard.retailer.essentail',compact(['essentailServices','subcribedServices']));
      }

      public function services() {
        $services = services::all();
        $subcribedServices = UserService::where('user_id',Auth::id())->pluck('service_id')->toArray();
        $myServices =  services::whereIn('id', $subcribedServices)->get();
        $subcribedServices_dates = UserService::where('user_id',Auth::id())->get();
        return view('dashboard.retailer.services',compact(['services','subcribedServices','myServices','subcribedServices_dates']));
      }

      public function payment() {
        
        
        return view('dashboard.retailer.payment');
      }

      public function report() {
       
        return view('dashboard.retailer.report');
      }

      public function notice() {
        
        return view('dashboard.retailer.notice');
      }

      public function loan() {
        
        return view('dashboard.retailer.loan');
      }

      public function cdm() {
        
        return view('dashboard.retailer.cdm');
      }

      public function support() {
        
        return view('dashboard.retailer.support');
      }
      
      
}
