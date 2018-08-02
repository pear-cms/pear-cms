@extends('admin.partials.layout')
@section('content')
<main id="main-container">
<div class="content content-full">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">All Realms</h3>
        </div>
        <div class="block-content">
            <p>
              From here you can view all the realms active on this database. You can filter through the realms by typing into the input field below.
            </p>
            <input class="form-control mb-10" type="text" id="search" placeholder="Type to search for a realm..." />
            <div class="table-responsive">
                <table class="table table-striped table-vcenter" id="realms">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 100px;">ID</th>
                            <th>Name</th>
                            <th style="width: 15%;">Game Icon</th>
                            <th style="width: 15%;">Security Level</th>
                            <th style="width: 15%;">Address & Port</th>
                            <th style="width: 15%;">Game Build</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($realms as $realm)
                        <tr>
                            <td class="text-center"><a href="{{ url('backend/settings/realm/') }}/{{ $realm->id }}" target="_blank">{{ $realm->id }}</a></td>
                            <td class="font-w600">{{ $realm->name }}</td>
                            <td>{{ Realms::getRealmIcon($realm->icon) }}</td>
                            <td>{{ $realm->allowedSecurityLevel }}</td>
                            <td>{{ $realm->address }}:{{ $realm->port }}</td>
                            <td>{{ Realms::getGameBuild($realm->gamebuild) }}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a class="btn btn-sm btn-secondary" href="{{ url('backend/settings/realm/') }}/{{ $realm->id }}" target="_blank" data-toggle="tooltip" title="Edit">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $realms->links() }}
            </div>
        </div>
    </div>
  </div>
</div>
</main>
@endsection

@section('customjs')
<script>
$( document ).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-toggle="popover"]').popover();
$("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#realms tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
    });

  </script>
  @endsection


@section('customjs')
<script>
$( document ).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-toggle="popover"]').popover();
});
  </script>
  @endsection
