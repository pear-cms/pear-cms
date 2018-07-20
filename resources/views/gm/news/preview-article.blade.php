@extends('partials.layout')

@section('content')
<div class="third-page" style="background-image:url('{{ asset('images/news/' . $news->image) }}')">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      {{ $news->title }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      {{ $news->description }}
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
    {{ $news->author }}
  </span>

  <span class="float-right">
    Posted on {{ date('h:i A d/m/y',$news->timestamp) }}
  </span>
</h5>
</div>
  <div class="col-md-12 mt-10 news-content">
  <p>
    {!! ucfirst($news->content) !!}
  </p>
  </div>
  <form action="{{ url('/gm/publish-article/publish') }}" id="article" method="POST">
  <div class="form-group text-center">
  <button type="submit" class="button border orange">
  Publish article
  </button>
</form>
@endsection
