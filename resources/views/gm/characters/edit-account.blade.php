@extends('partials.layout')
@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      Editing {{ $account->username }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      Choose what to do with {{ $account->username }}.
    </p>
  </div>
</div>
<div class="container col-md-6 text-grey mt-20">
<div class="row">
  <div class="col-md-12 no-padding">
  <h5 class="border-bottom mb-10">
    Edit Options
  </h5>
</div>

<a class="button border orange col-sm" href="{{url('')}}">
  Change Account Status
</a>
<a class="button border orange col-sm" href="{{url('')}}">
  Change Points
</a>
<a class="button border orange col-sm" href="{{url('')}}">
  Change GM Level
</a>
<a class="button border orange col-sm" href="{{url('')}}">
  Change Points
</a>
<div class="col-md-12 mt-20 no-padding">
<h5 class="border-bottom mb-10 text-grey">
  Character Options
</h5>
</div>

<a class="button border orange col-sm" href="{{url('/gm/account/')}}/{{$account->id}}/character/customize">
  Customize Character
</a>
</div>
</div>
@endsection
