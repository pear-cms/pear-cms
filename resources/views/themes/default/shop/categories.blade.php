@extends('partials.layout')

@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      {{ __('translation.shop_categories_page') }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      {{ __('translation.shop_categories_page_description') }}
    </p>
  </div>
</div>
<div class="container col-md-6 text-grey mt-20">
<div class="row">
  <div class="col-md-12 mt-20 no-padding">
  <h5 class="border-bottom mb-10 text-grey">
    {{ __('translation.showing_all_categories') }}
  </h5>
</div>
@foreach(Helpers::getShopCategories() as $category)
<a class="button border orange col-sm-4 center text-center" href="{{ url('/shop/category/'.$category->id) }}">
   <img alt="itemIcon" src="http://media.blizzard.com/wow/icons/36/{{ $category->image }}.jpg"/>
   {{$category->name}}
   <p style="color:#b7b7b7; margin:0; padding:0; font-size:9px;">{{Helpers::limitDescription($category->description)}}</p>
</a>
@endforeach
</div>
</div>
@endsection
