<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestPaymentController extends Controller
{
    public function index() 
    {
        return view('pages.users.request_payment');
    }
}
