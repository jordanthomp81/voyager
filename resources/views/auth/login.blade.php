@extends('layouts.app')

@section('content')

  {{ csrf_field() }}

  <div class="login-container">

    <div class="login-sub-container">
      <a id="login-main-logo" href="http://localhost:8000"><img src="https://image.ibb.co/d3Jt3b/voyager_logo_2x.png" width="230px" height="auto" alt="" /></a>

      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="login-email-input-container">
          <input id="login-email-input" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="login-password-input-container">
          <input id="login-password-input" type="password" placeholder="Password" name="password" required>
        </div>

        <div class="login-forgot-password-container">

          <a class="login-forgot-password" href="{{ route('password.request') }}">Forgot Your Password?</a>

          <a class="login-register" href="{{ route('register') }}">Create Account</a>

        </div>

        <button type="submit" class="login-btn">Login</button>

      </form>
    <div>

  </div>
@endsection
