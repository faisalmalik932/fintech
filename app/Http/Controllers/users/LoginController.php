<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login() {
        return view('pages.users.login');
    }


    public function user_login(Request $request) {
   
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')])) {
            $user = Auth()->user();
            if ($user) {
                return response()->json(['status' => 'Successfully Logged In']);
            } else {
                return response()->json(['error'=> 'Something went wrong']);
            }

        }
}
}
