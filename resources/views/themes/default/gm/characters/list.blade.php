@extends('partials.layout')
@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      Account List
    </h4>
    <p class="text-beige col-md-6 col-center">
      Select which account to manage.
    </p>
  </div>
</div>
<div class="container mt-3">
<div class="row justify-content-center">
  <div class="col-md-8">
    <input class="form-control" id="accountInput" type="text" placeholder="Search for ids, usernames and emails..">
    <br>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableSearch">
  @foreach(Helpers::getAllAccounts() as $account)
  <tr>
    <td>{{ $account->id }}</td>
    <td>{{ $account->username }}</td>
    <td>{{ $account->email }}</td>
    <td class="nosearch">
      <a href="{{url('/gm/account/view/'.$account->id)}}">
      View
    </a>
      /
      <a href="{{url('/backend/account/'.$account->id.'/edit')}}">
        Edit
      </a>
    </td>
  </tr>
  @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>

<script>
$(document).ready(function(){
 $("#accountInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#tableSearch tr").filter(function() {
        var textOfRow = $(this).text().replace($(this).find('td').eq(3).text(), "")
        $(this).toggle(textOfRow.toLowerCase().indexOf(value) > -1)
   });
 });
});
</script>

@endsection
