

@extends('layouts.app')

@section('content')













	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2>Reset Password</h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">Reset Password</a>
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
				<h1 style="font-size:40px;"><b>Reset Password</b></h1><hr/>

                  @if (session('status'))
                        <div style="color:green;" role="alert" style="font-size:15px;">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" style="font-size:15px;">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span style="color:red;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success btn-large">
                                    {{ __('Send Password Reset Link') }}
                                </button>
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
