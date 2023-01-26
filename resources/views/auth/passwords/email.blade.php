@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card mt-5" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="https://www.hau.edu.ph/images/logo-circle.png" class="img-fluid rounded-start" alt="..." style="background-color:maroon;">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <label for="login" class="col-md-8 col-form-label" style="padding-left:18%"><strong>RESET PASSWORD</strong></label>

                        <div class="row mb-3">
                            <div class="col-md-8">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your Email" style="margin-left:27%;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-2" >
                                <button type="submit" class="btn btn-dark" style="width:100%">
                                    {{ __('Send Reset Link') }}
                                </button>

                                
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-8 offset-md-4">
                                @if (Route::has('login'))
                                    <p>Back to <a href="{{ route('login') }}">{{ __('Login!') }}</a></p>
                                @endif
                            </div>
                        </div>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
            <!---->
        </div>
    </div>
</div>
@endsection
