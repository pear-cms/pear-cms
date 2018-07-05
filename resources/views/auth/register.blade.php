@extends('partials.layout')

@section('content')
<div class="container">
  <form action="{{ route('register') }}" method="POST">
    @csrf
    @if($errors->all())
    <div class="form error" style="display:block;">
    @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
    </div>
    @endif

    <div class="form-group">
    <label for="email">
      Email address
    </label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailhelp" placeholder="Enter your email..." value="{{ old('email') }}" />
    <small id="emailhelp" class="form-text text-muted">
      We promise not to send you anything inappropriate or share your email address among third parties.
    </small>
  </div>

  <div class="form-group">
  <label for="username">
    Username
  </label>
  <input type="username" class="form-control" id="username" name="username" aria-describedby="usernamehelp" placeholder="Enter a cool username..." value="{{ old('username') }}" />
  <small id="emailhelp" class="form-text text-muted">
    Do not enter an inappropriate name as they may be suspended.
  </small>
</div>

<div class="form-group">
<label for="password">
  Password
</label>
<input type="password" class="form-control" id="password" name="password" aria-describedby="passwordhelp" placeholder="Enter a strong password..." />
<small id="emailhelp" class="form-text text-muted">
  A strong password is the key to keeping your account secured!
</small>
</div>

<div class="form-group">
<label for="password">
  Confirm password
</label>
<input type="password" class="form-control" id="confirm_password" name="password_confirmation" aria-describedby="passwordhelp" placeholder="Confirm your strong password..." />
</div>
<div class="form-group text-center">
{!! Recaptcha::render() !!}
</div>
<div class="form-group text-center">
<button type="submit" class="button border yellow center">
Count me in!
</button>
</div>
  </form>
</div>
@endsection
