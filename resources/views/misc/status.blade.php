@extends('partials.layout')

@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      Server Status
    </h4>
    <p class="text-beige col-md-6 col-center">
      Check basic information about the server.
    </p>
  </div>
</div>
<div class="container col-md-6 mt-20">
<div class="row">
  @foreach ( Helpers::getRealms() as $realm)
  <div class="col-md-12">
  <h5 class="border-bottom mb-10">
    {{ $realm->name }}<span class="float-right">{{ Helpers::getRealmStatus($realm->port)}}</span>
  </h5>
  </div>
  @endforeach
  <div class="col-md-12 mt-20">
  <h5 class="border-bottom mb-10">
    Logon Server<span class="float-right">{{ Helpers::getRealmStatus(3724)}}</span>
  </h5>
</div>
</div>
</div>
@endsection
