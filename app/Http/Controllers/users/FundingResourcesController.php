<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FundingResourcesController extends Controller
{
    public function index() {
        return view('pages.users.funding_resources');
    }
}
