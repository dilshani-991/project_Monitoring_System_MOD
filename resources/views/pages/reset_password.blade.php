@extends('pages.header')
 @extends('pages.footer')
<style>
    .form-group{
        padding: 5px 5px;
        border-radius: 10px;
    }

</style>



 <!-- reset password page  -->



 @section('title','forget password')
 @section('content')

   <main class="mt-5">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-4 mt-5">

                @if (@session()->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>

                @endif
                @if (@session()->has('error'))
                <div class="alert alert-success">
                    {{session()->get('error')}}
                </div>

                @endif
                 <div class="card">
                     <h3 class="card-header text-center">Reset Password</h3>
                     <div class="card-body">
                         <form method="POST" action="/forget_password/reset_new_password">
                             @csrf
                             <input type="text"  name="token" value="{{$token}}">


                             <br>
                             <div class="form-group mb-3">
                                <input type="email" placeholder="Enter your Email address" id="email" class="form-control" name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">
                                    {{ $errors->first('email') }}
                                </span>
                                @endif
                            </div>
                             <div class="form-group mb-3">
                                <input type="text" placeholder="Enter your new password" id="password" class="form-control" name="password" required autofocus>
                                @if ($errors->has('password'))
                                <span class="text-danger">
                                    {{ $errors->first('password') }}
                                </span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                              <input type="text" placeholder="Conform your password" id="password" class="form-control" name="password_conform" required autofocus>
                              @if ($errors->has('password'))
                              <span class="text-danger">
                                  {{ $errors->first('password') }}
                              </span>
                              @endif
                          </div>


                                <br><br>
                                  <div class="text-center">
                                    <form action="" method="GET" style="display: inline;">
                                        <a href="">
                                        <button  type="submit" style="margin-right: 65px; background-color: blue; color: white; border: none; border-radius: 5px; padding: 4.5px 20px; weight:10px">Cansal</button>
                                     </a>
                                        <a href="">
                                            <button type="submit" style="margin-left: 65px; background-color: blue; color: white; border: none; border-radius: 5px; padding: 4px 20px;">Submit</button>
                                        </a>
                                    </form>

                                </div>








                         </form>
                     </div>

                 </div>

             </div>

         </div>
     </div>

 @endsection
