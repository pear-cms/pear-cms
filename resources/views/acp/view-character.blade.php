@extends('partials.layout')
@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      {{ $character->name }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      See some data that were retrieved from in-game regarding your character {{ $character->name }}.
    </p>
  </div>
</div>
<div class="container col-md-6 text-grey mt-20">
<div class="row">
  <div class="col-md-12">
  <h5 class="border-bottom mb-10">
    <img alt="{{ $character->name }}" src="{{ asset('images/races') }}/{{ $character->race }}_{{ $character->gender }}.jpg" /> {{ $character->name}}, Level {{ $character->level }}
    <span class="float-right">{{ Helpers::MapIdToZoneName($character->map )}}</span>
  </h5>
</div>

  <div class="col-md-12">
  <h5 class="border-bottom mb-10">
    Total Honor Points <span class="float-right">{{ $character->totalHonorPoints }}</span>
  </h5>
  </div>

  <div class="col-md-12">
  <h5 class="border-bottom mb-10">
    Total kills <span class="float-right">{{ $character->totalKills }}</span>
  </h5>
  </div>

  <div class="col-md-12">
  <h5 class="border-bottom mb-10">
    Total time played <span class="float-right">{{ Helpers::secondsToTime($character->totaltime) }}</span>
  </h5>
  </div>

  <div class="col-md-12">
  <h5 class="border-bottom mb-10">
    Online Status <span class="float-right status {{ Helpers::getCharacterStatus($character->online) }}">{{ Helpers::getCharacterStatus($character->online) }}</span>
  </h5>
  </div>

  <div class="col-md-12 mt-20">
  <h5 class="border-bottom mb-10">
    Current money
    <span class="float-right">
    {{ floor($character->money / 10000) }} <img alt="gold" src="{{ asset('images/icons/gold.png') }}" />
    {{ floor($character->money % 10000 / 100) }} <img alt="silver" src="{{ asset('images/icons/silver.png') }}" />
    {{ floor($character->money % 100) }} <img alt="copper" src="{{ asset('images/icons/copper.png') }}" />
  </span>
  </h5>
</div>

</div>
</div>
@endsection
