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
  @if (Session::has('success'))
                {{ Session::get('success') }}
                @endif
                @if ( Session::has('fail'))
                {{ Session::get('fail') }}
                @endif
  <form action="{{ url('/acp/password') }}" method="POST">
    @csrf
    @if($errors->all())
    <div class="form error" style="display:block;">
    @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
    </div>
    @endif
  <div class="form-group">
  <label for="oldpass">
    Old Password
  </label>
  <input type="password" class="form-control" id="oldpass" name="oldpass" aria-describedby="oldpasshelp" placeholder="Enter your old password..." />
</div>

<div class="form-group">
<label for="password">
  New Password
</label>
<input type="password" class="form-control" id="password" name="password" aria-describedby="passwordhelp" placeholder="Enter your new strong password..." />
</div>

<div class="form-group">
<label for="confirmpassword">
  Confirm Password
</label>
<input type="password" class="form-control" id="confirmpassword" name="confirmpassword" aria-describedby="confirmpasswordhelp" placeholder="Repeat your new strong password..." />
</div>

<div class="form-group text-center">
<button type="submit" class="button border orange">
Okay! Let's do the change...
</button>
</div>
  </form>
</div>
@endsection
