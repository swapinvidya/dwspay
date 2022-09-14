<?php
 
 namespace App\Http\Controllers;
 
 use Illuminate\Http\Request;
 use App\Models\Payment;
 use Redirect,Response;
 use Illuminate\Support\Facades\Auth;
 use Exception;
 use App\Models\welletRequests;
 use Illuminate\Support\Facades\Session;
 
 class RazorpayController extends Controller
 {
     public function razorpayProduct()
     {
       return view('razorpay');
     }
 
     public function razorPaySuccess(Request $request){
         $data = [
                   'user_id' => Auth::id(),
                   'product_id' => $request->product_id,
                   'r_payment_id' => $request->payment_id,
                   'amount' => $request->amount,
                ];
 
         $getId = Payment::insertGetId($data);
         
         if ($getId){
                $user = Auth::user();

                try{
                    $tx = $user->deposit($data['amount'],["id"=>0,"title"=>"WALLET TOPUP","description"=>"Topup of Internal wallet for Rs. ".$data['amount']]);
                    $check = welletRequests::create([
                        'user_id' => Auth::id(),
                        'amount'=> $request->amount,
                    ]);
                    Payment::findOrFail($getId)->update(['uuid'=>$tx->uuid]);
            
                }
                catch(Exception $e){
                    return response()->json([
                        'success' => 'false',
                        'Error'  => 'Illegal Action',
                        ], 400);
                }
                
            }

            $hello = "Hi, ".Auth::user()->name."Rs. ".$request->amount."is added successfully to your account your current balance is Rs".Auth::user()->balance; 
        
           // Session::flash('notification', true);

            $request->session()->flash('notification', true);
            $request->session()->flash('title', "Top Up Done!");
            $request->session()->flash('message' , $hello);
            $request->session()->flash('alert_type' , 'success');

            return redirect()->back();
 
        // $arr = array('msg' => 'Payment successfully credited', 'status' => true);
 
        // return Response()->json($arr);    
     }
 
     public function RazorThankYou()
     {
       return view('thankyou');
     }
 
 }
