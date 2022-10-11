<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\email;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
      public function index() {
        $topUsers = User::all('id','name','email','role_id');
        $emails = email::all();
        return view('dashboard.admin.adminDashboard',compact(['topUsers','emails']));
      }

      public function getBasicSettings(){

        return view ('dashboard.admin.adminBasicSettings');
      }
      
      public function getPaySettings(){

        return view ('dashboard.admin.adminPaySettings');
      }
      public function getProductSettings(){

        return view ('dashboard.admin.adminProductSettings');
      }
      public function getApiSettings(){

        return view ('dashboard.admin.adminApiSettings');
      }
      public function getUserSettings(){

        return view ('dashboard.admin.adminUserSettings');
      }
      public function getLicenceSettings(){

        return view ('dashboard.admin.adminLicenceSettings');
      }
      public function getReports(){

        return view ('dashboard.admin.adminReportSettings');
      }
}
