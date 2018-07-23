@extends('partials.layout')
@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      {{ Auth::user()->username }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      This is your personal account panel and from within here you can adjust some account settings, view your characters' information as well as
      seeing your tickets that you have made in-game.
    </p>
  </div>
</div>
<div class="container col-md-6 text-grey mt-20">
<div class="row">
  <div class="col-md-12 no-padding">
  <h5 class="border-bottom mb-10">
    Quick Tools
  </h5>
</div>
<a class="button border orange col-sm" href="#">
  Change Avatar
</a>
  <a class="button border orange col-sm" href="{{ url('/acp/password') }}">
    Change password
  </a>
  <a class="button border orange col-sm" href="{{ url('/acp/tickets') }}">
    My Tickets
  </a>
  @if (Helpers::checkIfGM())
  <a class="button border orange col-sm" href="{{ url('/gm') }}">
    GM Panel
  </a>
  @endif
  <a class="button border orange col-sm" href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
    Log out
  </a>
  <div class="col-md-12 mt-20 no-padding">
  <h5 class="border-bottom mb-10 text-grey">
    Character List
  </h5>
</div>

@foreach(Helpers::getAccountCharacters() as $character)
<a class="button border orange col-sm-5" href="{{ url('/acp/character') }}/{{ $character->name }}">
  <img alt="{{ $character->name }}" src="{{ asset('themes/default/images/races') }}/{{ $character->race }}_{{ $character->gender }}.jpg" /> {{ $character->name }}
</a>
@endforeach
@if (Helpers::getAccountCharactersNumbers() == 0)
<p class="text-red">
  You don't have any characters!
</p>
@endif

</div>
</div>
@endsection
