<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageCurrenciesController extends Controller
{
    public function index() {
        return view('pages.users.manage_currencies');
    }
}
