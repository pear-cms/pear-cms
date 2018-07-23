@extends('partials.layout')
@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
        {{ __('translation.gm_panel') }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      {{ __('translation.gm_panel_page_description') }}
    </p>
  </div>
</div>
<div class="container col-md-6 text-grey mt-20">
<div class="row">
  <div class="col-md-12 no-padding">
  <h5 class="border-bottom mb-10">
    {{ __('translation.management_tools') }}
  </h5>
</div>
<a class="button border orange col-sm" href="{{url('/gm/account/list')}}">
  {{ __('translation.button_account_list') }}
</a>
<a class="button border orange col-sm" href="{{url('/gm/ticket/list')}}">
  {{ __('translation.button_ticket_list') }}
</a>
<div class="col-md-12 mt-20 no-padding">
<h5 class="border-bottom mb-10 text-grey">
  {{ __('translation.news_system') }}
</h5>
</div>
<a class="button border orange col-sm" href="{{ url('/gm/publish-article') }}">
  {{ __('translation.button_publish_article') }}
</a>
</div>
</div>
@endsection
