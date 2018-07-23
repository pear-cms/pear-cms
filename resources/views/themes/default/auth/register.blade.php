@extends('partials.layout')

@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      {{ __('translation.register_account') }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      {{ __('translation.register_page_description') }}
    </p>
  </div>
</div>
<div class="container col-md-6 mt-20">
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
      {{ __('translation.email') }}
    </label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailhelp" value="{{ old('email') }}" placeholder="{{ __('translation.placeholder_email') }}" />
    <small id="emailhelp" class="form-text text-muted">
      {{ __('translation.email_label') }}
    </small>
  </div>

  <div class="form-group">
  <label for="username">
    {{ __('translation.username') }}
  </label>
  <input type="text" class="form-control" id="username" name="username" aria-describedby="usernamehelp" value="{{ old('username') }}" placeholder="{{ __('translation.placeholder_username') }}" />
  <small id="usernamehelp" class="form-text text-muted">
    {{ __('translation.username_label') }}
  </small>
</div>

<div class="form-group">
<label for="password">
  {{ __('translation.password') }}
</label>
<input type="password" class="form-control" id="password" name="password" aria-describedby="passwordhelp" placeholder="{{ __('translation.placeholder_password') }}" />
<small id="passwordhelp" class="form-text text-muted">
  {{ __('translation.password_label') }}
</small>
</div>

<div class="form-group">
<label for="password">
  {{ __('translation.confirm_password') }}
</label>
<input type="password" class="form-control" id="confirm_password" name="password_confirmation" aria-describedby="passwordhelp" placeholder="{{ __('translation.placeholder_confirm_password') }}" />
</div>
<div class="form-group text-center">
{!! Recaptcha::render() !!}
</div>
<div class="form-group text-center">
<button type="submit" class="button border orange">
{{ __('translation.button_register') }}
</button>
</div>
  </form>
</div>
@endsection
