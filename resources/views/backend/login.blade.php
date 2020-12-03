



    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="height: 100%;">
  <head>
    <meta charset="UTF-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{config('app.name', 'WritersGig')}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  
 <!-- Custom styles for this template -->
  <link href="{{ asset('css/simple-sidebar.css')}}" rel="stylesheet">
  <link href="{{ asset('css/side_bar.css')}}" rel="stylesheet">

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('dropify/dist/css/dropify.min.css')}}"> 
  </head>
  <body style="background-size: cover;
    background-position: center; height: 100%;
    background-image:url({{asset('css/img/landing_page_image.jpg') }}); 
    background-repeat: no-repeat;">
<div class="container">
    <br/><br/><br/>  <br/><br/><br/>
      <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg">
        <div class="card-body">
            <h5 class="card-title">Admin Login</h5>

             


                 <form class="login__form" method="POST" action="{{ route('admin.login') }}">
                @csrf
                @include('inc.messages')
            <div class="form-group">
            <label class="label" for="email">E-mail</label>  
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" />
             @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
          <div class="form-group">
            <label class="label" for="password">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password"  />
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br/>
            <button class="btn btn-success float-right" type="submit">Login</button>
          </div>
        </form>

           
        </div>
        </div>
  </div>
</div>

  <br/><br/><br/>  <br/><br/><br/>
</div>
</div>




<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>


 </body>
</html>










