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
    public function profile() 
    {
        Alert::success('Success Title', 'Success Message');

        return view('pages.users.profile');
    }
    public function save_userdata(Request $request) {

    $user_update =   DB::table('users')   
            ->where('id', Auth::user()->id)
            ->update([
                'address_line_one'   => $request->address_line_one,
                'address_line_two'   => $request->address_line_two,
                'country_name'       => $request->country_name,
                'city_name'          => $request->city_name,
                'postal_code'        => $request->postal_code,
                'zip_code'           => $request->zip_code,
                'phone_no'           => $request->phone_no,
                'landline_no'        => $request->landline_no
                ]);
        
        if($user_update) {
            return response()->json(['status' => true, 'message' => 'Data Submitted Successfully']);
        } else {
            return response()->json(['status' => 'Data not updated']);
        }
        
}

    public function save_picture(Request $request) 
    {

        $user = User::where('id', Auth::user()->id)->first();
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
