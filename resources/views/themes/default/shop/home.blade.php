@extends('partials.layout')

@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      {{ __('translation.shop_page') }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      {{ __('translation.shop_page_description') }}
    </p>
  </div>
</div>
<div class="container col-md-6 mt-20">
  @if (Session::has('success'))
              <div class="form success" style="display:block;">
                {{ Session::get('success') }}
              </div>
                @endif
                @if ( Session::has('fail'))
                <div class="form error" style="display:block;">
                {{ Session::get('fail') }}
              </div>
                @endif
  <form action="{{ url('/donate') }}" method="POST">
    @csrf
    @if($errors->all())
    <div class="form error" style="display:block;">
    @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
    </div>
    @endif
    <div class="form-group">
    <label for="amount">
      {{ __('translation.donate_amount') }}
    </label>
    <input type="amount" class="form-control" id="amount" name="amount" aria-describedby="amount" placeholder="{{ __('translation.placeholder_donate') }}" value="{{ old('amount') }}" />
    <small class="form-text text-muted">
      <img src="{{ asset('images/icons/goldcoin.png') }}"> 1 = $1
    </small>
  </div>

<div class="form-group text-center">
<button type="submit" class="button border orange">
{{ __('translation.button_donate') }}
</button>
</div>
  </form>
</div>
@endsection
