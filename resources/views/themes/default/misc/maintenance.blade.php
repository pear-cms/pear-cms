@extends('partials.layout')
@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      {{ env('APP_NAME') }} is in maintenance
    </h4>
    <p class="text-beige col-md-6 col-center">
      {{ env('APP_NAME') }} is getting its oil levels checked to ensure the website cog wheels are running smoothly. Please, allow us some moments.
    </p>
  </div>
</div>
<div class="container col-md-6 text-grey mt-20">
<div class="row">
  <div class="col-md-12 no-padding">
  <h5 class="border-bottom mb-10">
    Maintenance is ongoing!
  </h5>
  <p>
    Maintenance allow us some moments to ensure that we offer you the best browsing experience possible and ensure that no bugs are present.
  </p>
</div>
</div>
</div>
@endsection
