<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MakePaymentController extends Controller
{
    public function index() 
    {
        return view('pages.users.make_payment');
    }
}
