@extends('partials.layout')
@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      Customize Character of {{$account->username}}
    </h4>
    <p class="text-beige col-md-6 col-center">
      Pick character and customize it. Change name, appearance, race or faction.
    </p>
  </div>
</div>
<div class="container col-md-6 text-grey mt-20">
  <form action="{{url('')}}" method="post">
      <div class="form-group">
      <label for="controlSelectCharacter">Choose what to customize</label>
      <select class="form-control" id="controlSelectCharacter">
        @foreach(Helpers::getAccountCharactersById($account->id) as $character)
          <option value="{{$character->guid}}">{{$character->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
    <label for="controlSelectCustomize">Choose what to customize</label>
    <select class="form-control" id="controlSelectCustomize">
      <option value="1">Name</option>
      <option value="2">Appearance</option>
      <option value="3">Race</option>
      <option value="4">Faction</option>
    </select>
  </div>
  <div class="form-group text-center">
  <button type="submit" class="button border orange">
  Okay! Let's customize it.
  </button>
  </div>
  </form>
</div>
@endsection
