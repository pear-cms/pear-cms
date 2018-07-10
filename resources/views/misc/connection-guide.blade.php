@extends('partials.layout')
@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      Connection guide for {{ env('APP_NAME') }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      Follow the connection guide to properly connect to our realm.
    </p>
  </div>
</div>
<div class="container col-md-6 text-grey mt-20">
<div class="row">
  <div class="col-md-12 no-padding">
  <h5 class="border-bottom mb-10">
    How to connect:
  </h5>
</div>
</div>
<p class="col-sm">
  <ul>
    <li>
      Register an <a href="{{ url('/register') }}">account</a> before you proceed.
    </li>
    <li>
      Download <a href="https://utorrent.com">µTorrent</a> or any other preferred BitTorrent client.
    </li>
    <li>
      Pick one of the following game clients to download:
      <ul>
      <li>
        <a href="https://drive.google.com/open?id=10haxUSbtzN45fEOPO7k6MH6Bfcw2lQ2G">
          3.3.5a client with Warlords of Draenor graphics
        </a>
      </li>
      <li>
        <a href="https://drive.google.com/open?id=1z1IFOaDciHH5TG79kr_1TvICLgSjv7rD">
          3.3.5 a client with original graphics
        </a>
      </li>
    </ul>
    </li>
    <li>
      Open <strong>Data -- > enUS</strong> and change the content of <strong>realmlist.wtf</strong> with the following information:
        <ul>
          <li>
            <strong>
              set realmlist {{ env('REALM_IP') }}
            </strong>
          </li>
        </ul>
    </li>
    <li>
      <a href="{{url('/login')}}">Log in</a> and enjoy!
    </li>
  </ul>
</p>
</div>
@endsection
