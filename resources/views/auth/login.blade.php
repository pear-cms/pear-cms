@extends('partials.layout')

@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      Log in
    </h4>
    <p class="text-beige col-md-6 col-center">
      Log in to your account by entering your account information below.
    </p>
  </div>
</div>
<div class="container col-md-6 mt-20">
  <form action="{{ route('login') }}" method="POST">
    @csrf
    @if($errors->all())
    <div class="form error" style="display:block;">
    @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
    </div>
    @endif
  <div class="form-group">
  <label for="username">
    Username
  </label>
  <input type="text" class="form-control" id="username" name="username" placeholder="Enter your cool username..." value="{{ old('username') }}" />
</div>

<div class="form-group">
<label for="password">
  Password
</label>
<input type="password" class="form-control" id="password" name="password" placeholder="Enter your strong password..." />
</div>

<div class="form-group">
<div class="form-check mb-2 mr-sm-2">
    <label class="form-check-label">
      <input class="form-check-input" name="remember" type="checkbox" id="remember"> Remember me
    </label>
    <small id="emailhelp" class="form-text text-muted">
      This will keep your session alive and will not log you out due to inactivity.
    </small>
  </div>
</div>

<div class="form-group text-center">
{!! Recaptcha::render() !!}
</div>
<div class="form-group text-center">
<button type="submit" class="button border orange">
Count me in!
</button>
</div>
  </form>
</div>
@endsection
