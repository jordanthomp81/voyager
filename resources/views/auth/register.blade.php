@extends('layouts.app')

@section('content')
<div class="create-account-container">
  <div class="create-account-sub-container">

    <a id="create-account-main-logo" href="http://localhost:8000"><img src="https://image.ibb.co/d3Jt3b/voyager_logo_2x.png" width="230px" height="auto" alt="" /></a>

    <h1>Register Account</h1>

    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

        <div class="create-account-name-input-container">
          <input id="create-account-name-input" placeholder="Name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="create-account-email-input-container">
          <input id="create-account-email-input" placeholder="Email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="create-account-password-input-container">
          <input id="create-account-password-input" type="password" placeholder="Password" class="form-control" name="password" required>
        </div>

        <div class="create-account-confirm-password-input-container">
          <input id="create-account-confirm-password-input" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
        </div>

        <button type="submit" class="register-btn">Register</button>
    </form>
  </div>
</div>
@endsection
