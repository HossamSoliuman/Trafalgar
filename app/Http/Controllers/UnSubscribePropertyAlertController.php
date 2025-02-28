<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\EmailPropertyAlert;

class UnSubscribePropertyAlertController extends Controller
{
    public function index(Request $request){
      
        $decrypted = Crypt::decryptString($request->email);
        if($decrypted != ""){
      $emailAlert =   EmailPropertyAlert::where('email',$decrypted)->update(['check_status' => 0]);
          $redirectUrl = route('/');
          return redirect($redirectUrl)->with('success', 'Property alert unsubscribe successfully');
        }else{
             $redirectUrl = route('/');
          return redirect($redirectUrl)->with('error', 'somethings went wrong..');
        }
    }
}
