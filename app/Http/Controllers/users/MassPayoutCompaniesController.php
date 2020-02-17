<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MassPayoutCompaniesController extends Controller
{
    public function index() 
    {
        return view('pages.users.mass_payout_companies');
    }
}
