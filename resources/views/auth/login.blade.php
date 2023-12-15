@extends('layouts.app')

@section('content')
<div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="https://www.debt.org/wp-content/uploads/2013/04/Student-Internship.jpg" alt="">
        <div class="text">
          <span class="text-1">Every new friend is a <br> new adventure</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>


      <div class="back">
        <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>


    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

              <div class="text">
                @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
                </div>
              <div class="button input-box">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

            </div>

              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
      </div>




        <div class="signup-form">
          <div class="title">Signup</div>
          <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            </div>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
              </div>


              <div class="button input-box">
                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>

@endsection
