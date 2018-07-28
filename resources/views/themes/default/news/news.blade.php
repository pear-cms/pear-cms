@extends('partials.layout')
@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      {{ __('translation.displaying_all_news') }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      {{ __('translation.news_page_description') }}
    </p>
  </div>
</div>
<div class="container col-md-6 text-grey mt-20">
<div class="row news-articles">
  @if(count($articles) > 0)
@foreach ($articles as $news)
<a class="news-article col-sm-12 mt-20" href="{{ url('/news/')}}/{{$news->id}}" style="background-image:url('{{ asset('images/news/' . $news->image) }}')">
  <div class="news-article-bottom col-md-12">
  <p class="news-article-date">
    {{ date('M d, Y', $news->timestamp) }}
  </p>
  <h4 class="news-article-title">
    {{ ucwords($news->title) }}
    @if (time() - $news->timestamp < 86400)
      <span class="badge badge-secondary">
        {{ __('translation.badge_new') }}
      </span>
    @endif
  </h4>
  <h4 class="news-article-description">
    {{ substr($news->description, 0, 50) }}..
    <span class="float-right">
      {{ __('translation.read_more') }}
    </span>
  </h4>
  </div>
  <div class="news-article-fade"></div>
</a>
@endforeach
@else
<p class="col-sm">
  {{ __('translation.no_articles') }}
</p>
@endif
</div>
</div>
@endsection
