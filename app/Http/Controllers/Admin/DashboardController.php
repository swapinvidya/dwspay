<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
      public function index() {
        $topUsers = User::all('id','name','email','role_id');
        return view('dashboard.admin.adminDashboard',compact('topUsers'));
      }
}
