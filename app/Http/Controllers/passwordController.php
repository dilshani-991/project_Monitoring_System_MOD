<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PasswordController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view('pages.forget_password');
    }
    public $token;
    public function __construct($user,$token)
  {
        $this->user=$user;
        $this->token=$token;
  }


    function showForgetPasswordFormPost(Request $request){
       $request->validate([
        'email' =>'required|email|exists:users',
       ]);

       $token = Str::random(64);

       DB::table('password_reset_tokens')->insert([
         'email'=>$request->email,
         'token'=>$token,
         'cerated_at'=> Carbon::now()
       ]);

       Mail::send('pages.email',['token' => $token],function ($message) use ($request){
        $message->to($request->email);
        $message->subject('Reset password');

       });

       return redirect()->to('forget_password')->with('success','we have send an email to reset password');
    }
    function resetpassword($token){
        return view ('reset_password',compact('token'));


    }
   function  conformNewPassword(Request $request){
           $request->validate([
            'email'=>'required|email|exists:user',
            'password'=>'required|string|min:6|confirmed',
            'password_conform'=>'required'
           ]);

           $updatePassword =DB::table('reset_password')->Where([
            'email'=>$request->email,
            'email'=>$request->token,
           ])->first();

           if(!$updatePassword){
            returnredirect()->to(route('reset_password'))->with('error','Invaild');
           }
           user::Where('email',$request->email)->update(['password'=>Hash::make($request->password)]);

           DB::table('reset_password')->where(['email'=>$request->email])->delete();

           return redirect()->to(route('login'))->with('success','password reset sucess');

   }
}
