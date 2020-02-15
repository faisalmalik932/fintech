<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\User;

class RegisterController extends Controller
{
    public function register() {
        return view('pages.users.register');
    }

    public function save_register(Request $request) {
        
        $user = User::where('email', $request['email'])->first();

        if($user) {
            return response()->json(['exists' => true, 'message' => 'Email Already Exists']);
        } else {
            $user = new User;
            $user->fname = $request['fname'];
            $user->lname = $request['lname'];
            $user->email = $request['email'];
            $user->password = bcrypt($request['password']);
        }

        if($user->save()) {
            return response()->json(['status' => true, 'message' => 'Data Submitted Successfully']);
        } else {
            return response()->json(['status' => true, 'message' => 'Data not submnitted']);
        }
}
}
