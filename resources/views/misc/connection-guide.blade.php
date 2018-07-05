@extends('partials.layout')
@section('content')
<div class="col-md-12 mt-10">
  <h5>
    How to connect to Haomarush.
  </h5>
  <p>
    Install a BitTorrent client of your liking, then proceed to download one of the following:
    <li><a href="magnet:?xt=urn:btih:322598D924EBA39CB15002928C7933E1B5C28DC6&dn=Wrath+of+the+Lich+King+3.3.5a" target="_blank">Custom Game client with Legion models</a></li>
    <li><a href="magnet:?xt=urn:btih:b296ea8947b36c68f6e022f5a642ec c406ad8968&dn=World+of+Warcraft+3.3.5" target="_blank">Original Game Client</a></li>
  </p>
  <p>
    Once the download is done, you may open up the game folder, then go into the <b>Data</b> folder which you will either
    see <b>enUS</b> or <b>enGB</b> depending on game client region but just enter whichever folder you find in there.
  </p>
  <p>
    Once you are in that folder, you will find a file named <b>realmlist.wtf</b> - open it up and change its content to the following:
    <br /><br />
    <b>set realmlist play.project-haomarush.eu</b>
  </p>
</div>
</div>
@endsection
