@extends('partials.layout')
@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      {{ __('translation.displaying_all_changelogs') }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      {{ __('translation.changelogs_page_description') }}
    </p>
  </div>
</div>
<div class="container col-md-6 text-grey mt-20">
<div class="row news-articles">
  @if(count($changelogs) > 0)
@foreach ($changelogs as $changelog)
<a class="news-article col-sm-12 mt-20" href="{{ url('/changelog/'.$changelog->id)}}" style="background-image:url('{{ asset('images/changelog/banner.jpg') }}')">
  <div class="news-article-bottom col-md-12">
  <p class="news-article-date">
    {{ date('M d, Y', $changelog->timestamp) }}
  </p>
  <h4 class="news-article-title">
    {{ ucwords($changelog->title) }}
    @if (time() - $changelog->timestamp < 86400)
      <span class="badge badge-secondary">
        {{ __('translation.badge_new') }}
      </span>
    @endif
  </h4>
  <h4 class="news-article-description">
    {{ preg_replace('/<[^>]*>/', '', substr($changelog->content, 0, 50)) }}
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
  {{ __('translation.no_changelogs') }}
</p>
@endif
</div>
</div>
@endsection
