<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayVatController extends Controller
{
    public function index() 
    {
        return view('pages.users.pay_vat');
    }
}
