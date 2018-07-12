@extends('partials.layout')

@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      Server Status
    </h4>
    <p class="text-beige col-md-6 col-center">
      See some important statistics, status and other essential information about {{ env('APP_NAME') }}.
    </p>
  </div>
</div>
<div class="container col-md-6 mt-20">
<div class="row">
  @foreach ( Helpers::getRealms() as $realm)
  <div class="col-md-12">
  <h5 class="border-bottom mb-10">
    <span class="text-orange">
      {{ $realm->name }}
    </span>
    <span class="float-right status {{ Helpers::getRealmStatus($realm->port) }}">
      {{ Helpers::getRealmStatus($realm->port) }}
    </span>
  </h5>
  </div>
  @endforeach

  <div class="col-md-12 mt-20">
  <h5 class="border-bottom mb-10">
    Authentication server
    <span class="float-right status {{ Helpers::getRealmStatus(3724) }}">
      {{ Helpers::getRealmStatus(3724) }}
    </span>
  </h5>
</div>
</div>
</div>
@endsection
