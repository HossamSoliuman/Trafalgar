<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\User;
use Auth;
use Redirect;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['userAuth']);
       // ,'verified'
    }

  
    public function index()
    {
           $setting = Setting::find(1);
         return view('frontPart.dashboard.profile',compact('setting'));
        // return view('home');
    }
    
    
    
    public function updateProfile(Request $request)
    {
      $userId =   Auth::user()->id;
        $request->validate([
            'name' => 'required',
           'email' =>  ['required','unique:users,email,' . $userId,],
             'address' => 'required',
             'phone_number' => 'required|integer',
        ]);
      $user =   User::find($userId);
      $user->name = $request->name  ;
      $user->email = $request->email  ;
        $user->phone_number = $request->phone_number  ;
         $user->address = $request->address  ;
         $user->save();
      return Redirect::back()->with('success', 'profile update successfully');
    }
    
     public function changePassword(){
         $setting = Setting::find(1);
         return view('frontPart.dashboard.changePassword',compact('setting'));
    }
    
    public function updatePassword(Request $request)
    {
         $id = Auth::user()->id;
         $request->validate([
            'password' => 'min:8',
            'cnfpassword' => 'required_with:password|same:password|min:8'
        ]);
        $user = User::find($id);
		$user->password =   Hash::make($request->password);
        $user->save();
       
            
        return Redirect::back()->with('success', 'Password update successfully');
    }
   
}
