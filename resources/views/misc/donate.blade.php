@extends('partials.layout')

@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      Donate to {{ env('APP_NAME') }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      Donate to us and receive donation points in order to purchase in-game cosmetic items.
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
      Amount in dollar ($)
    </label>
    <input type="amount" class="form-control" id="amount" name="amount" aria-describedby="amount" placeholder="Enter amount to donate..." value="{{ old('amount') }}" />
    <small id="emailhelp" class="form-text text-muted">
      1 (one) USD equals 1 (one) donation point.
    </small>
  </div>

<div class="form-group text-center">
<button type="submit" class="button border orange">
Donate
</button>
</div>
  </form>
</div>
@endsection
