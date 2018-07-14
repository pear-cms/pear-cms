@extends('partials.layout')
@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      Viewing {{ $account->username }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      See some data that were retrieved regarding account {{ $account->username }}.
    </p>
  </div>
</div>
<div class="container col-md-6 text-grey mt-20">
<div class="row">
  <div class="col-md-12">
  <h5 class="border-bottom mb-10">
    Email <span class="float-right">{{ $account->email }}</span>
  </h5>
  </div>

  <div class="col-md-12">
  <h5 class="border-bottom mb-10">
    Total Characters <span class="float-right">{{ Helpers::getAccountCharactersNumbersById($account->id) }}</span>
  </h5>
  </div>

  <div class="col-md-12">
  <h5 class="border-bottom mb-10">
    Join Date <span class="float-right">{{ $account->joindate }}</span>
  </h5>
  </div>

  <div class="col-md-12">
  <h5 class="border-bottom mb-10">
    Last Login <span class="float-right">{{ $account->last_login }}</span>
  </h5>
  </div>

  <div class="col-md-12">
  <h5 class="border-bottom mb-10">
    Last IP <span class="float-right">{{ $account->last_ip }}</span>
  </h5>
  </div>

  <div class="col-md-12">
  <h5 class="border-bottom mb-10">
    Last IP Attempt <span class="float-right">{{ $account->last_attempt_ip }}</span>
  </h5>
  </div>

  <div class="col-md-12">
  <h5 class="border-bottom mb-10">
    Online Status <span class="float-right status {{ Helpers::getAccountOnlineStatus($account->id) }}">{{ Helpers::getAccountOnlineStatus($account->id) }}</span>
  </h5>
  </div>

  <div class="col-md-12">
  <h5 class="border-bottom mb-10">
    Last OS Used <span class="float-right">{{ $account->os }} <img alt="{{ $account->os }}" src="{{asset('images/platforms')}}/{{strtolower($account->os)}}.png"></span>
  </h5>
  </div>
    <div class="col-md-12">
    <h5 class="border-bottom mb-10">
      Account Status <span class="float-right status {{Helpers::getAccountStatus($account->id)}}">{{Helpers::getAccountStatus($account->id)}}</span>
    </h5>
    </div>
  <div class="col-md-12 mt-20">
  <h5 class="border-bottom mb-10">
    Current Points
    <span class="float-right">
      <span class="mr-10">
      <img alt="silvercoins" src="{{ asset('images/icons/silvercoin.png') }}" /> {{ $account->silvercoins }}
    </span>
      <img alt="goldcoins" src="{{ asset('images/icons/goldcoin.png') }}" /> {{ $account->goldcoins }}
  </span>
  </h5>
</div>

</div>
</div>
@endsection
