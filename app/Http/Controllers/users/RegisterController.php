<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function register() {
        return view('pages.users.register');
    }

    public function save_register(Request $request) {
    
            $user = new User;
            $user->fname = $request['fname'];
            $user->lname = $request['lname'];
            if($user->save()) {
                return response()->json(['status' => 'Data Submitted Successfully']);
            } else {
                return response()->json(['status' => 'Data not submnitted']);
            }
    }
}
