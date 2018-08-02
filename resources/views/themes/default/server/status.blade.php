@extends('partials.layout')

@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      {{ __('translation.server_status') }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      {{ __('translation.server_status_page_description') }}
    </p>
  </div>
</div>
<div class="container col-md-6 mt-20">
<div class="row">
  @foreach ( Realms::select('name', 'address', 'port', 'description')->get() as $realm)
  <div class="col-md-12">
  <h5 class="border-bottom mb-10">
    <span class="text-orange">
      {{ $realm->name }}
    </span>
    <span class="float-right status {{ Helpers::getRealmStatus($realm->port) }}">
      {{ Realms::getRealmStatus($realm->port) }}
    </span>
  </h5>
  <p class="text-small">
    {{ __('translation.server_world_small_description') }}
    <span class="float-right text-orange">
    {{ $realm->description }}
  </span>
  </p>
  </div>
  @endforeach

  <div class="col-md-12 mt-10">
  <h5 class="border-bottom mb-10">
    <span class="text-orange">
      {{ __('translation.authentication_system') }}
    </span>
    <span class="float-right status {{ Helpers::getRealmStatus(3724) }}">
      {{ Realms::getRealmStatus(3724) }}
    </span>
  </h5>
  <p class="text-small">
    {{ __('translation.server_auth_small_description') }}
  </p>
</div>
</div>
</div>
@endsection
