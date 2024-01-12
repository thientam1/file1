<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\user;

class authController extends Controller
{
    public function loginUser(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'pass' => 'required',
            ],
            [   'email.required' => 'Email trống',
                'pass.required' => 'mật Khẩu trống',
            ],
        );
        $khach = user::where('email', '=', $request->email)->first();
        if ($khach) {
            if (Hash::check($request->pass, $khach->pass)) {

                Session::put('id', $khach->userID);
                Session::put('email', $khach->email);
                    if ($khach->roleID == '1') {
                        return redirect('tutorial');
                    } else {
                        return redirect('home');
                    }
            } else {
                return back()->with('fail', 'sai mật khẩu');
            }
        } else {
            return back()->with('fail', 'email không tồn tại');
        }
    }
    public function home(){
        $data = array();
        if (Session::has('id')) {
            $data = DB::table('user')->where('userID', '=', Session::get('userID'))->first();
        }
        return view('front.master', compact('data'));
    }
}
