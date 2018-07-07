@extends('partials.layout')

@section('content')
<div class="third-page" style="background-image:url('{{ asset('images/news/' . $news->picture) }}')">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      Viewing News #{{$news->id}}
    </h4>
    <p class="text-beige col-md-6 col-center">
      You are currently viewing news #{{$news->id}}
    </p>
  </div>
</div>
<div>
<div class="container col-md-6 mt-20">
<div class="row">
  <a class="news-article col-sm" href="{{ url('/news/')}}/{{$news->id}}" style="background-image:url('{{ asset('images/news/' . $news->picture) }}')"> </a>
  <div class="col-md-12 mt-20">
  <h5 class="border-bottom mb-10">
    {{ucwords($news->title)}}<span class="float-right">Posted on {{date('H:i:s M d, Y', $news->date)}}</span>
  </h5>
  <p>
    {{ucfirst($news->description)}}
  </p>
  </div>
</div>
</div>
</div>
@endsection
