
<style>
    .form-container {
     position: relative;
     width: 300px; /* Adjust this width as per your form width */
     height: 200px; /* Adjust this height as per your form height */
 }

 .btn {
     position: absolute;
     bottom: 10px;
     left: 10px;
 }



 .btn-submit {
     position: absolute;
     bottom: 10px;
     right: 10px;
 }






 </style>





  <!-- Reset password  page  -->

@extends('pages.header')
@extends('pages.footer')



@section('title','reset password')
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
                          <form method="POST" action="/submitform">
                              @csrf



                              <div class="form-group mb-3">
                                  <input type="password" placeholder="password" id="password" class="form-control" name="password" required>
                                  @if ($errors->has('password'))
                                   <span class="text-danger">
                                      {{ $errors->first('password')}}
                                   </span>

                                  @endif

                              </div><br>
                              <div class="form-group mb-3">
                                 <input type="text" placeholder="Conform Password" id="password" class="form-control" name="conformpassword" required autofocus>
                                 @if ($errors->has('comformpassword'))
                                  <span class="text-danger">
                                     {{$errors->first('conformpassword')}}

                                  </span>
                                  @endif



                             </div><br><br>

                               <div class="text-center">
                                 <button type="button" style="margin-right: 65px; background-color: blue; color: white; border: none; border-radius: 5px; padding: 4.5px 20px; weight:10px">Cansal</button>

                                 <button type="button" style="margin-left: 65px; background-color: blue; color: white; border: none; border-radius: 5px; padding: 4px 20px; ">Submit</button>

                             </div>



                          </form>
                      </div>

                  </div>

              </div>

          </div>
      </div>

  @endsection

