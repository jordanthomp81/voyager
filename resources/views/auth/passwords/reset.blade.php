@extends('layouts.app')

@section('content')
<div class="reset-password-email-container">
  <div class="reset-password-email-sub-container">

    <a id="reset-password-email-main-logo" href="http://localhost:8000"><img src="https://image.ibb.co/d3Jt3b/voyager_logo_2x.png" width="230px" height="auto" alt="" /></a>

    <h1>Reset Password</h1>

    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
        {{ csrf_field() }}

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="reset-password-email-sent-input-container">
          <input id="reset-password-email-sent-input" placeholder="Email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required>
        </div>

        <div class="reset-password-email-password-input-container">
          <input placeholder="Password" id="reset-password-email-password-input" type="password" class="form-control" name="password" required>
        </div>

        <div class="reset-password-confirm-email-password-input-container">
          <input placeholder="Confirm Password" id="reset-password-confirm-email-password-input" type="password" class="form-control" name="password_confirmation" required>
        </div>

        <button type="submit" class="reset-email-btn">Reset Password</button>
    </form>
  </div>
</div>
@endsection
