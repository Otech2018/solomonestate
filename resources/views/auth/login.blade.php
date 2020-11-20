<?php $login ="";  ?>

@extends('layouts.app')

@section('content')













	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2>LogIn</h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">LogIn</a>
			</div>
		</div>
	</div>
</div>




		<div class="col-md-3 contact-info">
			<div >
				<div class="clearfix">
				</div>
			</div>
		</div>
		
            <div class="col-md-6 contact-form-wrapper" style="padding:40px;">
			<div class="inner-wrapper">
				<h1 style="font-size:40px;"><b>Log In</b></h1><hr/>
				<form  method="POST" action="{{ route('login') }}" style="font-size:15px;">
					
                   




                    @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="font-size:15px; ">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email" autocomplete="email" autofocus>

                                @error('email')
                                    <span style="color:red;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"  >{{ __('Password') }}</label>
                            
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control  form-control-lg  @error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="current-password">

                                @error('password')
                                    <span style="color:red;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" >
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-lg btn-success">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a style="color:green;" href="{{ route('password.request') }}" >
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>










              </form>
				<div class="clearfix">
				</div>
			</div>
		</div>



	</div>
</div>

































@endsection
