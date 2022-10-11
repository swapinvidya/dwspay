<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RazorpayController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\statsController;
use Ramsey\Uuid\Provider\Node\StaticNodeProvider;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin dashboard page (role 2)
Route::get('/Admin','Admin\DashboardController@index')->middleware('role:2')->name('admin_db');
Route::get('/admin_basic','Admin\DashboardController@getBasicSettings')->middleware('role:2')->name('admin_bs');
Route::get('/admin_payment','Admin\DashboardController@getPaySettings')->middleware('role:2')->name('admin_ps');
Route::get('/admin_product','Admin\DashboardController@getProductSettings')->middleware('role:2')->name('admin_pros');
Route::get('/admin_api','Admin\DashboardController@getApiSettings')->middleware('role:2')->name('admin_api');
Route::get('/admin_users','Admin\DashboardController@getUserSettings')->middleware('role:2')->name('admin_user');
Route::get('/admin_licence','Admin\DashboardController@getLicenceSettings')->middleware('role:2')->name('admin_lic');
Route::get('/admin_Reports','Admin\DashboardController@getReports')->middleware('role:2')->name('admin_Report');
//Admin dashboard page (role 3)
Route::get('/SuperDist','SuperDist\DashboardController@index')->middleware('role:3')->name('sd_db');

//Admin dashboard page (role 4)
Route::get('/Distributer','Dist\DashboardController@index')->middleware('role:4')->name('d_db');

//Admin dashboard page (role 5)
Route::get('/APIPartner','ApiPartner\DashboardController@index')->middleware('role:5')->name('api_db');

//Admin dashboard page (role 6)
Route::get('/Retailer','Retailer\DashboardController@index')->middleware('role:6')->name('retailer_db');
Route::get('/r_essential','Retailer\DashboardController@essentail')->middleware('role:6')->name('r_essentail');
Route::get('/r_services','Retailer\DashboardController@services')->middleware('role:6')->name('r_services');
Route::get('/r_payment','Retailer\DashboardController@payment')->middleware('role:6')->name('r_payment');
Route::get('/r_report','Retailer\DashboardController@report')->middleware('role:6')->name('r_report');
Route::get('/r_notice','Retailer\DashboardController@notice')->middleware('role:6')->name('r_notice');
Route::get('/r_loan','Retailer\DashboardController@loan')->middleware('role:6')->name('r_loan');
Route::get('/r_cdm','Retailer\DashboardController@cdm')->middleware('role:6')->name('r_cdm');
Route::get('/r_support','Retailer\DashboardController@support')->middleware('role:6')->name('r_support');


//ajax routes
Route::post('/buyService','purcheseController@buyService');
Route::post('/topupRequest', 'purcheseController@walletRequest');

//services
Route::get('/services','servicesController@index');

//Razopay
Route::get('product', [RazorpayController::class, 'razorpayProduct']);
Route::get('paysuccess', [RazorpayController::class, 'razorPaySuccess']);
Route::get('razor-thank-you', [RazorpayController::class, 'RazorThankYou']);

//Receipts
Route::get('serviceRecpt',[ReceiptController::class,'RecptGenarate']);

//charts
Route::get('/chartData',[statsController::class,'charts']);
Route::get('/topUsers',[statsController::class,'topUsers']);

//email
Route::get('/emailpopup',[EmailController::class,'emailpopup']);
Route::get('/sendAdminmail',[EmailController::class,'sendAdminmail']);
