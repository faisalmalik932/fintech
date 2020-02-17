<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ToBankAccountController extends Controller
{
    public function index() 
    {
        return view('pages.users.to_bank_account');
    }
}
