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
    Email
    <span class="float-right">
      Join Date
    </span>
  </h5>
  <p>
    {{ $account->email }}
    <span class="float-right">
      {{ $account->joindate }}
    </span>
  </p>
  </div>

  <div class="col-md-12">
  <h5 class="border-bottom mt-10 mb-10">
    Last IP
    <span class="float-right">
      Last IP Attempt
    </span>
  </h5>
  <p>
    {{ $account->last_ip }} ({{ $ip->regionName }}, {{ $ip->countryCode}})
    @if (isset($account->last_login))
    @ {{ $account->last_login }}
    @endif
    <span class="float-right">
      {{ $account->last_attempt_ip }}
    </span>
  </p>
  </div>

  <div class="col-md-12">
  <h5 class="border-bottom mb-20">
    Last OS Used
    <span class="float-right text-small">
      {{ $account->os }} <img alt="{{ $account->os }}" src="{{asset('images/platforms')}}/{{strtolower($account->os)}}.png">
    </span>
  </h5>
  </div>
    <div class="col-md-12">
    <h5 class="border-bottom mb-10">
      Account Status
      <span class="float-right">
        Online Status
      </span>
    </h5>
    <p>
    @if(Helpers::getAccountStatus($account->id) == 2)
      <span title="Ban Reason" data-toggle="popover" data-trigger="hover" data-content="{{ Helpers::getBanReason($account->id) }}" class="status Banned">Banned (Hover)</span>
    @elseif(Helpers::getAccountStatus($account->id) == 1)
     <span title="What does Locked means?" data-toggle="popover" data-trigger="hover" data-content="The acount is locked, which means only 1 IP ({{ $account->last_ip }}) can log in." class="status Locked">Locked (Hover)</span>
     @elseif(Helpers::getAccountStatus($account->id) == 0)
     <span class="status Active">Active</span>
     @endif
     <span class="float-right status {{ Helpers::getAccountOnlineStatus($account->id) }}">{{ Helpers::getAccountOnlineStatus($account->id) }}</span>
   </p>
    </div>
  <div class="col-md-12">
  <h5 class="border-bottom mb-10">
    Current Points
  </h5>
  <p>
    <img alt="silvercoins" src="{{ asset('images/icons/silvercoin.png') }}" /> {{ $account->silvercoins }}
    <img alt="goldcoins" src="{{ asset('images/icons/goldcoin.png') }}" /> {{ $account->goldcoins }}
  </p>
</div>

</div>
</div>
@endsection
