@extends('partials.layout')
@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      Displaying all news
    </h4>
    <p class="text-beige col-md-6 col-center">
      Here are all news that {{env('APP_NAME')}} currently has.
    </p>
  </div>
</div>
<div class="container col-md-6 text-grey mt-20">
<div class="row">
@foreach (Helpers::getAllNewsArticles() as $news)
<a class="news-article col-sm-12 mt-20" href="{{ url('/news/')}}/{{$news->id}}" style="background-image:url('{{ asset('images/news/' . $news->picture) }}')">
  <div class="news-article-bottom col-md-12">
  <p class="news-article-date">
    {{date('M d, Y', $news->date)}}
  </p>
  <h4 class="news-article-title">
    {{ucwords($news->title)}}
  </h4>
  <h4 class="news-article-description">
    {{ucfirst($news->description)}}
  </h4>
  </div>
  <div class="news-article-fade"></div>
</a>
@endforeach
</div>
</div>
@endsection
