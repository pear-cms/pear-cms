@extends('partials.layout')

@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      {{ __('translation.shop_category_page') }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      {{ __('translation.shop_category_page_description') }}
    </p>
  </div>
</div>
<div class="container col-md-6 text-grey mt-20">
<div class="row">
  <div class="col-md-12 no-padding">
  <h5 class="border-bottom mb-10">
    {{ __('translation.category_info') }}
  </h5>
  <div class="card border-info" style="background-color:#2F1A06;">
  <div class="card-body">
    <h5 class="card-title">
<img alt="itemIcon" src="http://media.blizzard.com/wow/icons/56/{{ $category->image }}.jpg"/>
      {{$category->name}}
    </h5>
    <p class="card-text">{{ $category->description }}</p>
  </div>
</div>
</div>
  <div class="col-md-12 mt-20 no-padding">
  <h5 class="border-bottom mb-10 text-grey">
    {{ __('translation.items_in_category') }}
  </h5>
</div>
@foreach(Helpers::getItemsByCategory($category->id) as $item)
<a class="button border orange col-sm-2 text-center" href="{{ url('/shop/item/'.$item->id) }}">
   <img alt="itemIcon" src="http://media.blizzard.com/wow/icons/36/{{ $item->image }}.jpg"/><p style="color:{{ Helpers::findQuality($item->quality) }}; margin:0; padding:0;">{{ $item->name }}</p>
   <p style="color:#b7b7b7; margin:0; padding:0; font-size:9px;">{{Helpers::limitDescription($item->description)}}</p>
</a>
@endforeach
</div>
</div>
@endsection
