<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Session;
// use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
     public function showLoginForm()
  {
       $setting = Setting::find(1);
      $fromUrl =  url()->previous();
      if($fromUrl != route('/')){
           session(['link' => url()->previous()]);
      }
       
      return view('auth.login',compact('setting'));
  }


    protected function authenticated(Request $request, $user) {
        if ($user->user_type == 1) {
            //return redirect('user-profile');
           if(Session::has('link')){
                
                 return redirect(session('link'));
            }
             return redirect('user-profile');
        } else if ($user->user_type == 0) {
            return redirect('admin/dashboard');
        }
        //  else {
        //     return redirect('/blog');
        // }
   }


    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);
      
    //     $credentials = $request->only('email', 'password');
    //     if (Auth::attempt(['email'=>$request->email , 'password' => $request->password,'user_type' => 1])) {
   
    //         return redirect()->route('home');
    //     }
        
    //     return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    // }
}