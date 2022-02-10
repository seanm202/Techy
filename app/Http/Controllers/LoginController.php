<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class LoginController extends Controller
{
    //
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $email=$request->input('email');
            $userDetails = DB::table('users')
                     ->select('name','email')
                     ->where('email',$email)
                     ->get();
            $userRole=0;//$userDetails['role'];
            if($userRole==1)
              return view('Admin\dashboard',['userDetails'=>$userDetails]);
            elseif($userRole==2)
              return view('Users\dashboard',['userDetails'=>$userDetails]);
            else {
              return view('Guest\dashboard',['userDetails'=>$userDetails]);
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
