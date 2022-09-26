<?php

namespace App\Http\Controllers;

use App\Mail\sendAdminmail;
use App\Models\email;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class EmailController extends Controller
{
    public function emailpopup (Request $request){
        $id = $request->input('id');
        $user = User::find($id);
        return view ('email.emailpopup',compact(['user']));
    }

    public function sendAdminmail(Request $request){

        

        $u_id = User::find($request->input('user_id'));
        $u_name = $u_id->name;
        $u_email = $u_id->email;

        //create email

        $e = email::create([
            'name' => $u_name,
            'user_id'=> Auth::id(),
            'body' => $request->input('body')
        ]);

        $email = email::find($e->id);
        
        Mail::to($u_email)->send(new sendAdminmail($email));
        

        $data = [
            'success' => true,
            'message'=> 'Successfilly send mail to '.$u_name." on ".$u_email,
          ] ;

        return response()->json($data);
    }
}
