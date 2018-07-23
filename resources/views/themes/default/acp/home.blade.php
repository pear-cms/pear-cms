@extends('partials.layout')
@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      {{ Auth::user()->username }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      {{ __('translation.account_panel_page_description') }}
    </p>
  </div>
</div>
<div class="container col-md-6 text-grey mt-20">
<div class="row">
  <div class="col-md-12 no-padding">
  <h5 class="border-bottom mb-10">
    {{ __('translation.quick_tools') }}
  </h5>
</div>
<a class="button border orange col-sm" href="#">
    {{ __('translation.button_change_avatar') }}
</a>
  <a class="button border orange col-sm" href="{{ url('/acp/password') }}">
    {{ __('translation.button_change_password') }}
  </a>
  <a class="button border orange col-sm" href="{{ url('/acp/tickets') }}">
    {{ __('translation.button_my_tickets') }}
  </a>
  @if (Helpers::checkIfGM())
  <a class="button border orange col-sm" href="{{ url('/gm') }}">
    {{ __('translation.button_gm_panel') }}
  </a>
  @endif
  <a class="button border orange col-sm" href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
    {{ __('translation.button_log_out') }}
  </a>
  <div class="col-md-12 mt-20 no-padding">
  <h5 class="border-bottom mb-10 text-grey">
    {{ __('translation.character_list') }}
  </h5>
</div>

@foreach(Helpers::getAccountCharacters() as $character)
<a class="button border orange col-sm-5" href="{{ url('/acp/character') }}/{{ $character->name }}">
  <img alt="{{ $character->name }}" src="{{ asset('themes/default/images/races') }}/{{ $character->race }}_{{ $character->gender }}.jpg" /> {{ $character->name }}
</a>
@endforeach
@if (Helpers::getAccountCharactersNumbers() == 0)
<p class="text-red">
  {{ __('translation.error_no_characters') }}
</p>
@endif

</div>
</div>
@endsection
