<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

  
  
    public function showLoginForm()
    {


        return view('pages.admin.login',[
            'title' => 'Login',
            'loginRoute' => 'admin.login',
        ]);
    }


    public function login(Request $request)     
{

    
    if(Auth::guard('admin')->attempt($request->only('email','password'))){
        //Authentication passed...
        return redirect()->route('admin.home');
    }
}

public function logout()
{
    Auth::guard('admin')->logout();
    return redirect()
        ->route('admin.login')
        ->with('status','Admin has been logged out!');
}

}
