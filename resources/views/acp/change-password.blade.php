@extends('partials.layout')
@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      Change password
    </h4>
    <p class="text-beige col-md-6 col-center">
      Do you need a new password? Change your old password now!
    </p>
  </div>
</div>
<div class="container col-md-6 mt-20">
  <form action="{{ url('/acp/password') }}" method="POST">
    @csrf
    @if($errors->all())
    <div class="form error" style="display:block;">
    @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
    </div>
    @endif
    @if (Session::has('success'))
    <div class="form error" style="display:block;">
          {{ Session::get('success') }}
   </div>
    @endif
    @if ( Session::has('error'))
    <div class="form error" style="display:block;">
          {{ Session::get('error') }}
    </div>
      @endif
  <div class="form-group">
  <label for="oldpass">
    Current password
  </label>
  <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Enter your current password..." />
</div>

<div class="form-group">
<label for="password">
  New password
</label>
<input type="password" class="form-control" id="password" name="password" placeholder="Enter your new strong password..." />
</div>

<div class="form-group">
<label for="confirmpassword">
  Confirm password
</label>
<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Repeat your new strong password..." />
</div>

<div class="form-group text-center">
<button type="submit" class="button border orange">
Okay! Let's do the change.
</button>
</div>
  </form>
</div>
@endsection
