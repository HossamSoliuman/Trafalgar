<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class PasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

   
    public function index()
    {
       
        return view('admin.pages.passwordupdate');
    }
    
      public function update(Request $request)
    {
        
        
          $id = Auth::user()->id;
         $request->validate([
            'password' => 'min:8',
            'cnfpassword' => 'required_with:password|same:password|min:8'
        ]);
        $user = User::find($id);
		$user->password =   Hash::make($request->password);
        $user->save();
       
            
        return redirect('/admin/password')->with('success', 'Password update successfully');
     
    }
}
