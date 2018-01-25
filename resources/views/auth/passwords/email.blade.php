@extends('layouts.app')

@section('content')
<div class="reset-password-container">

  <div class="reset-password-sub-container">

    <a id="reset-password-main-logo" href="http://localhost:8000"><img src="https://image.ibb.co/d3Jt3b/voyager_logo_2x.png" width="230px" height="auto" alt="" /></a>

    <h1>Reset Password</h1>

    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">

        {{ csrf_field() }}

        <div class="reset-password-email-input-container">
          <input id="reset-password-email-input" placeholder="Email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
        </div>


        <button type="submit" class="reset-pass-btn">Reset</button>

    </form>

  </div>

</div>
@endsection
