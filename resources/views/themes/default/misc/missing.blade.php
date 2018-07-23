@extends('partials.layout')
@section('content')
<div class="full-page">
  <div class="full-page-content">
    <h4 class="text-header text-upper">
      Uh oh...
    </h4>
    <p class="text-beige col-md-6 col-center">
      {{ __('translation.error_not_found') }}
    </p>
  </div>
</div>
@endsection
