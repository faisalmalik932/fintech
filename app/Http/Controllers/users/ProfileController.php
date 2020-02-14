<?php

namespace App\Http\Controllers\users;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User_detail;
use DB;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile() 
    {
        Alert::success('Success Title', 'Success Message');

        return view('pages.users.profile');
    }
    public function save_userdata(Request $request) {
    
        $user = new User_detail;
        $user_id = Auth()->user()->id;
        $user['user_id']=$user_id;
        $user->address_line_one = $request['address_line_one'];
        $user->address_line_two = $request['address_line_two'];
        $user->country_name = $request['country_name'];

        $user->city_name = $request['city_name'];
        $user->postal_code = $request['postal_code'];
        $user->zip_code = $request['zip_code'];
        $user->phone_no = $request['phone_no'];
        $user->landline_no = $request['landline_no'];
        $user->comp_country_corporation_name = $request['comp_country_corporation_name'];
        $user->comp_corporation_city = $request['comp_corporation_city'];
        if($user->save()) {
            return response()->json(['status' => 'Data Submitted Successfully']);
        } else {
            return response()->json(['status' => 'Data not submnitted']);
        }
        
}

    public function save_picture(Request $request) 
    {

        $user = User::where('id', Auth::user()->id)->first();
        // $imageName = time().'.'.request()->image->getClientOriginalExtension();
        // //dd($imageName);
        // request()->image->move(public_path('images'), $imageName);

        if ($request->hasfile('image')){
            $file = $request->file('image');
            
            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()).'.'.$extension;
            $file->move(public_path().'\users',$filename);
            $user->image=$filename;
            $user->save();
    }
}
}
