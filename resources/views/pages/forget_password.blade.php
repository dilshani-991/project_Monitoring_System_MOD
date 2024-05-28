@extends('pages.header')
 @extends('pages.footer')
<style>
    .form-group{
        padding: 5px 5px;
    }

</style>













 <!-- Register page  -->



 @section('title','Register')
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
                         <form method="POST" action="{{route('register.post')}}">
                             @csrf


                             <br>
                             <div class="paragrph">
                                <p>
                                    Enter the email address associated with your account to reset your password.
                                </p>
                             </div>
                             <br>


                             <div class="form-group mb-3">
                                 <input type="text" placeholder="User name" id="name" class="form-control" name="name" required autofocus>
                                 @if ($errors->has('name'))
                                  <span class="text-danger">
                                     {{$errors->first('name')}}

                                  </span>
                                  @endif


                                <br><br>
                                  <div class="text-center">
                                    <form action="/reset-password" method="GET" style="display: inline;">
                                        <button  type="submit" style="margin-right: 65px; background-color: blue; color: white; border: none; border-radius: 5px; padding: 4.5px 20px; weight:10px">Cansal</button>
                                        <button type="submit" style="margin-left: 65px; background-color: blue; color: white; border: none; border-radius: 5px; padding: 4px 20px;">Submit</button>

                                    </form>

                                </div>








                         </form>
                     </div>

                 </div>

             </div>

         </div>
     </div>

 @endsection
