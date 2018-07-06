@extends('partials.layout')
@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      {{ env('APP_NAME') }} is in maintenance
    </h4>
    <p class="text-beige col-md-6 col-center">
      Currently {{ env('APP_NAME') }} is in maintenance, please wait.
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
     Maintenance happens a lot to websites. Whether a bug is being fixed or just a simple system check. Please gives us few minutes to sort the problem!
  </p>
</div>
</div>
</div>
@endsection
