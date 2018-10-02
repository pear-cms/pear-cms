@extends('partials.layout')
@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      {{ __('translation.features_page') }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      {{ __('translation.features_page_description') }}
    </p>
  </div>
</div>
<div class="container col-md-6 text-grey mt-20">
<div class="row">
  <div class="col-md-12 no-padding">
  <h5 class="border-bottom mb-10">
  Features:
  </h5>
</div>
</div>
<p>Coding:</p>
<div class="progress" style="background-color:#352011; height: 50px;">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
</div>
<p>Design:</p>
<div class="progress" style="background-color:#352011; height: 50px;">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
</div>
<p></p>
</div>
@endsection
