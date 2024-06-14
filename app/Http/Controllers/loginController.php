<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use views\pages\login;
use Illuminate\Support\Facades\Hash;


class loginController extends Controller
{

    public function login(){
        return view('pages.login');
    }

    function loginPost(Request $request){
        $request->validate([

            'name'=> 'required',
            'password'=> 'required',
            ]);
            $credentials = $request->only('name','password');
            if(Auth::attempt($credentials)){
                return redirect()->intended(route('home'));
            }
            return redirect(route('login'))->with('error','Login failed');


    }
    public function showLoginForm()
    {
        return view('pages.login');
    }

    // after sign in
    public function dashboard()
    {
        return view('pages.dashboards.user');
    }

    function register(){
        return view('pages.register');
    }

    function registerPost(Request $request){
        $request->validate([
            'email'=>'required',
            'name'=> 'required',
            'password'=> 'required',
            ]);

            $user = new User();
            $user->name =$request->name;
            $user->email =$request->email;
            $user->password = Hash::make($request->password);
            if ($user->save()){
                return redirect(route('login'))->with('success','User account created sucessfully');
            }
            return redirect(route('register'))->with('error','Faild to create account');


    }
}
