<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function list()
    {
        $users=User::all();
      return view('layouts.user.list',compact('users'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'password'=>bcrypt($request->password)
        ]);

        return redirect()->back();

    }

    public function login()
    {
        return view('layouts.login');
    }

    public function doLogin(Request $request)
    {
       $request->validate([
           'email'=>'required',
           'password'=>'required',
       ]);

//       $credentials=$request->except('_token');
       $credentials=$request->only('email','password');

        if (Auth::attempt($credentials))
        {
            return redirect()->route('dashboard');
        }else
        {
            return redirect()->back()->with('message','Invalid Credentials.');
        }


    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
