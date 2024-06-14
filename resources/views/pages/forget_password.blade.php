@extends('pages.header')
 @extends('pages.footer')
<style>
    .form-group{
        padding: 5px 5px;
    }

</style>



 <!-- forget password page  -->



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
                     <h3 class="card-header text-center">Forget Password</h3>
                     <div class="card-body">
                         <form method="POST" action="/forget_password">
                             @csrf


                             <br>
                             <div class="paragrph">
                                <p>
                                    Enter the email address associated with your account to reset your password.
                                </p>
                             </div>
                             <br>


                             <div class="form-group mb-3">
                                 <input type="email" placeholder="Enter your email address" id="email" class="form-control" name="email" required autofocus>
                                 @if ($errors->has('email'))
                                  <span class="text-danger">
                                     {{$errors->first('email')}}

                                  </span>
                                  @endif


                                <br><br>
                                  <div class="text-center">
                                    <form action="" method="GET" style="display: inline;">
                                        <a href="/login">
                                        <button  type="submit" style="margin-right: 65px; background-color: blue; color: white; border: none; border-radius: 5px; padding: 4.5px 20px; weight:10px">Cansal</button>
                                     </a>
                                        <a href="/resetpassword">
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
