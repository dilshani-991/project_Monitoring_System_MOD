<script>
    document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('signin-form');

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        // Add form validation or authentication logic here if needed

        // Redirect to the dashboard page
        window.location.href = '/user-dashboard';
    });
});

</script>






 <!-- Login page  -->

@extends('pages.header')
@extends('pages.footer')

@section('title','Login')
@section('content')
<body>


  <main class="mt-5 custom-bg" >
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
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
                        <form method="POST" action="/submitform">
                            @csrf


                            <div class="form-group mb-3">
                                <input type="text" placeholder="User name" id="name" class="form-control" name="name" required autofocus>
                                @if ($errors->has('name'))
                                 <span class="text-danger">
                                    {{$errors->first('name')}}

                                 </span>
                                 @endif



                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                 <span class="text-danger">
                                    {{ $errors->first('password')}}
                                 </span>

                                @endif

                            </div><br>
                            <div class="forget-password" style="text-align: center">
                                <a href="/forgetpassword">Forget password</a>
                            </div>
                            <br>


                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Signin</button>

                            </div><br>
                            <div class="account" style="text-align: center">
                                <p>Don't have an account? <a href="{{ route('register') }}">Signup</a></p>
                            </div>

                        </form>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

</body>

@endsection
