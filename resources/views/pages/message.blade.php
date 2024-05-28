

@extends('pages.header')
@extends('pages.footer')
<style>
    .form-group{
        padding: 5px 5px;
    }
    .card{
        border-radius: 50px;
        border-block-color: red;
    }

</style>













 <!-- message page  -->



 @section('title','message')
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

                     <div class="card-body">
                         <form method="POST" action="{{route('register.post')}}">
                             @csrf


                             <br>
                             <div class="paragrph">
                                <p align ='center'>
                                    Your password has been changed successfully!</p>
                                             <p align ='center'> Thank you!</p>
                                </p>
                             </div>
                             <br>





                                <br><br>
                                  <div class="text-center">

                                        <button  type="submit" style="margin-right: 20px; background-color: blue; color: white; border: none; border-radius: 5px; padding: 4.5px 20px; weight:10px">Cansal</button>



                                </div>








                         </form>
                     </div>

                 </div>

             </div>

         </div>
     </div>

 @endsection
