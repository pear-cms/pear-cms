@extends('partials.layout')
@section('content')
<div class="full-page">
  <div class="full-page-content">
    <h4 class="text-header text-upper">
        {{ __('translation.currently_under_maintenance') }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      {{ __('translation.currently_under_maintenance_message') }}
    </p>
  </div>
</div>
@endsection
