<style>
    .form-container {
        position: relative;
        width: 300px; /* Adjust this width as per your form width */
        height: 100px; /* Adjust this height as per your form height */
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

    .text {
        height: 200px;
    }
</style>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('pages.header')

    <main class="mt-5">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-6 mt-5">
                  @if (session()->has('success'))
                  <div class="alert alert-success">
                      {{ session()->get('success') }}
                  </div>
                  @endif
                  @if (session()->has('error'))
                  <div class="alert alert-danger">
                      {{ session()->get('error') }}
                  </div>
                  @endif
                  <div class="card">
                      <h3 class="card-header text-center">Contact Us</h3>
                      <div class="card-body">
                          <form method="POST" action="/submitform">
                              @csrf
                              <div class="form-group mb-3">
                                  <input type="email" placeholder="Enter your email address" id="email" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                  <span class="text-danger">
                                      {{ $errors->first('email') }}
                                  </span>
                                  @endif
                              </div>
                              <div class="form-group mb-3">
                                  <textarea placeholder="Enter your message" id="message" class="form-control" name="message" required autofocus style="width: 100%; height: 200px; text-align: left;"></textarea>
                                  @if ($errors->has('message'))
                                  <span class="text-danger">
                                      {{ $errors->first('message') }}
                                  </span>
                                  @endif
                              </div>
                              <div class="text-center">
                                  <button type="reset" style="margin-right: 20px; background-color: blue; color: white; border: none; border-radius: 5px; padding: 10px 20px;">Cancel</button>
                                  <button type="submit" style="margin-left: 20px; background-color: blue; color: white; border: none; border-radius: 5px; padding: 10px 20px;">Submit</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </main>

    @include('pages.footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
