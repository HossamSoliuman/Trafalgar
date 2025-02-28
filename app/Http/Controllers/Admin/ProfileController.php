<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('admin');
    }

   
    public function index()
    {
       
        return view('admin.pages.profile');
    }
    
      public function update(Request $request)
    {
           $id = Auth::user()->id;
         $request->validate([
            'name' => 'required|string|max:255',
           // 'email' => 'required|string|email|max:255|unique:users',
           'email' => ['required', 'string', 'email', 'max:255','unique:users,email,'.$id],
             'profileImage' => 'sometimes|mimes:jpeg,jpg,bmp,png',
           // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        
        
     
        $user =  User::find($id);
        //$user = User::find($id);
       if($request->hasFile('profileImage')){
            
            $name = $request->file('profileImage')->getClientOriginalName();
            $path = $request->file('profileImage')->store('public/profileImage');
            $path = str_replace("public/profileImage/","",$path);
            $user->profile_image = $path;
        }
        
		$user->name = $request->name;
		$user->email = $request->email;
        $user->save();
       
            
        return redirect('/admin/profile')->with('success', 'profile update successfully');
     
    }
}
