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
<aside id="right"><div id="content_ajax"><div class="page_content page">
<div><p><span><em>Welcome to {{ env('APP_NAME') }}! Here is a simple guide to download and play.</em></span></p>
<p><span><br /><strong>1.</strong></span>&nbsp;<span><span><span><a href="{{ url('/register')}}">Register</a>&nbsp;</span></span></span>an account.&nbsp;&nbsp;<br /><br /><strong>2.</strong>&nbsp;Install World of Warcraft - Wrath of the Lich King:<br />- Client Option 1. <a href="https://drive.google.com/open?id=1z1IFOaDciHH5TG79kr_1TvICLgSjv7rD">Classic WoTLK (16.4GB)</a><span><br /></span>- Client Option 2. <a href="https://drive.google.com/open?id=10haxUSbtzN45fEOPO7k6MH6Bfcw2lQ2G">WoTLK &amp; HD WoD Character/Creatures Models (18.5GB)</a></p>
<p>Both Options are hosted on Google.<br /><br /><span><span><strong>3.</strong> Edit</span>&nbsp;your&nbsp;</span>realmlist.wtf<span>&nbsp;to:</span><br /><strong><span><span>set&nbsp;</span></span>realmlist<span><span>&nbsp;{{ env('REALM_IP') }}</span></span></strong><br /><br /><span><span>Start</span>&nbsp;up the Game, and enjoy Campfire!</span></p>
<p><span><em>In order to acquire a Discord Invitation, You will need to login to your {{ env('APP_NAME') }} Account and click the "Discord" Button once logged in, The rest is automated!</em></span></p>
<p><span>&nbsp;</span></p></div>
</div></div></aside>
</div>
@endsection
