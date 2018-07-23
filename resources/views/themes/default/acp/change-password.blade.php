@extends('partials.layout')
@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      {{ __('translation.change_password') }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      {{ __('translation.change_password_page_description') }}
    </p>
  </div>
</div>
<div class="container col-md-6 mt-20">
  @if (Session::has('success'))
  <div class="form success" style="display:block;">
        {{ Session::get('success') }}
 </div>
  @endif
  @if ( Session::has('error'))
  <div class="form error" style="display:block;">
        {{ Session::get('error') }}
  </div>
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
    {{ __('translation.current_password') }}
  </label>
  <input type="password" class="form-control" id="current_password" name="current_password" placeholder="{{ __('translation.placeholder_current_password') }}" />
</div>

<div class="form-group">
<label for="password">
  {{ __('translation.new_password') }}
</label>
<input type="password" class="form-control" id="password" name="password" placeholder="{{ __('translation.placeholder_new_password') }}" />
</div>

<div class="form-group">
<label for="confirmpassword">
  {{ __('translation.confirm_password') }}
</label>
<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="{{ __('translation.placeholder_confirm_password') }}" />
</div>

<div class="form-group text-center">
<button type="submit" class="button border orange">
{{ __('translation.button_change_password') }}
</button>
</div>
  </form>
</div>
@endsection
