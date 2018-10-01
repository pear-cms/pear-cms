@extends('partials.layout')

@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      {{ __('translation.shop_page') }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      {{ __('translation.shop_page_description') }}
    </p>
  </div>
</div>
<div class="container col-md-6 text-grey mt-20">
<div class="row">

    <div class="col-md-12 no-padding">
    <h5 class="border-bottom mb-10">
      {{ __('translation.quick_options') }}
    </h5>
  </div>
  <a class="button border orange col-sm" href="{{ url('/shop/items') }}">
      {{ __('translation.show_all_items') }}
  </a>

  <a class="button border orange col-sm" href="{{ url('/shop/categories') }}">
      {{ __('translation.show_all_categories') }}
  </a>
  <div class="col-md-12 mt-20 no-padding">
  <h5 class="border-bottom mb-10 text-grey">
    {{ __('translation.random_items') }}
  </h5>
</div>
@foreach($randomitems as $randomitem)
<a class="button border orange col-sm-5 center text-center" href="{{ url('/shop/item/'.$randomitem->id) }}">
   <img alt="itemIcon" src="https://wow.zamimg.com/images/wow/icons/medium/{{ $randomitem->image }}.jpg"/><p style="color:{{ Helpers::findQuality($randomitem->quality) }}; margin:0; padding:0;">{{ $randomitem->name }}</p>
   <p style="color:#b7b7b7; margin:0; padding:0; font-size:9px;">{{$randomitem->description}}</p>
</a>
@endforeach
</div>
</div>
@endsection
