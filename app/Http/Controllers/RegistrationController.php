<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ValidatedInput;
use Illuminate\Support\Facades\Hash;
use DB;
class RegistrationController extends Controller
{
    //
    public function register(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        DB::table('users')->insert([
    'name' => $request->input('name'),
    'email' => $request->input('email'),
    'password' =>  Hash::make($request->input('password'))
]);
        $userDetails = $request->only(['name', 'email'])->get;
        return view('Guest\dashboard',['userDetails'=>$userDetails]);
    }
}
