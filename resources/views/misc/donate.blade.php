@extends('partials.layout')

@section('content')
<div class="container">
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
<button type="submit" class="button border yellow center">
Donate
</button>
</div>
  </form>
</div>
@endsection
