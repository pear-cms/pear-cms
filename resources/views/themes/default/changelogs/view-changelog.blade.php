@extends('partials.layout')

@section('content')
<div class="third-page" style="background-image:url('{{ asset('images/changelog/banner.jpg')}}')">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      {{ $changelog->title }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      {{ $changelog->description }}
    </p>
  </div>
</div>
<div class="container col-md-6 mt-20">
<div class="row">
  <div class="col-md-12 mt-20">
<h5 class="border-bottom mb-10 text-small text-muted">
  Posted by
  <img src='{{ asset('images/icons/gm.png') }}' />
  <span class="text-gamemaster">
    {{ $changelog->author }}
  </span>

  <span class="float-right">
    {{ __('translation.posted_on') }} {{ date('h:i A d/m/y',$changelog->timestamp) }}
  </span>
</h5>
</div>
  <div class="col-md-12 mt-10 news-content">
  <p>
    {!! ucfirst($changelog->content) !!}
  </p>
  </div>

@endsection
