@extends('partials.layout')
@section('content')
<div class="half-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      {{ env('APP_NAME') }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      {{ env('APP_NAME') }} is a new content management system for World of Warcraft servers, it is primarily built to manage TrinityCore 3.3.5a
      powered servers but may receive additional core support if there is enough demand for it. It is powered by the magics of Laravel for enhanced
      security layers and it also uses the latest framework for the front-end as well as the back-end.
    </p>
    @if(!isset(Auth::user()->id))
    <div class="container col-md-6">
    <div class="row justify-content-md-center mt-20">
      <a class="button border orange col-md-3">
        Learn more
      </a>
      <a class="button border red col-md-4" href="{{ url('/register') }}">
        Register
      </a>
    </div>
  </div>
  @else
  <div class="container col-md-6">
  <div class="row justify-content-md-center mt-20">
    <a class="button border orange col-md-4" href="{{ url('/acp') }}">
      Account Panel
    </a>
  </div>
</div>
  @endif
  </div>
</div>
<div class="container mt-10">
  <div class="row">

    <div class="col-md-12">
      <h4 class="text-upper text-header text-white">
        Latest news
      </h4>
    </div>

    <a class="news-article col-sm" href="#" style="background-image:url('{{ asset('images/news/news_image_1.jpg') }}')">
      <div class="news-article-bottom col-md-12">
      <p class="news-article-date">
        June 5th, 2018
      </p>
      <h4 class="news-article-title">
        Introducing Pear CMS!
      </h4>
      </div>
      <div class="news-article-fade"></div>
    </a>

    <a class="news-article col-sm" href="#" style="background-image:url('{{ asset('images/news/news_image_2.jpg') }}')">
      <div class="news-article-bottom col-md-12">
      <p class="news-article-date">
        June 4th, 2018
      </p>
      <h4 class="news-article-title">
        Pear CMS fixes!
      </h4>
      </div>
      <div class="news-article-fade"></div>
    </a>

</div>
</div>
@endsection
