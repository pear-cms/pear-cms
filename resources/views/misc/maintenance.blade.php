@extends('partials.layout')
@section('content')
<div class="row mt-10">
  <div class="col text-center">
  <p>
    Site is currently under maintenance, please check back at a later time.
  @if (! Helpers::getSiteAuthenticationStatus() )
  <br />
    You may, however, still register a new account or log in to an existing one.
  @endif
</p>
  <div class="col-md-12 realmlist text-center mt-10">
    <p>
      set realmlist <b>play</b>.project-haomarush.eu | server is {{ Helpers::getRealmStatus() }}
    </p>
  </div>
</div>
</div>
@endsection
