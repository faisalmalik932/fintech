<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }
    public function index() {
        $user = Auth::user()->fname;
        return view('pages.index');
    }
    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }
}
