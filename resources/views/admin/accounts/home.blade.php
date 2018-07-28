@extends('admin.partials.layout')
@section('content')
<main id="main-container">
<div class="content content-full">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">All Accounts</h3>
        </div>
        <div class="block-content">
            <p>
              From here you can view all the player accounts currently registered as well as being able to quickly edit and delete accounts as you see fit. You can use the
              input field below to search for any account, including usernames, emails and account IDs.
            </p>
            <input class="form-control mb-10" type="text" id="search" placeholder="Type to search for an account..." />
            <div class="table-responsive">
                <table class="table table-striped table-vcenter" id="users">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 100px;">ID</th>
                            <th>Username</th>
                            <th style="width: 25%;">Email</th>
                            <th style="width: 15%;">Account Status</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($accounts as $account)
                        <tr>
                            <td class="text-center">
                                {{ $account->id }}
                            </td>
                            <td class="font-w600">{{ $account->username }}</td>
                            <td>{{ $account->email }}</td>
                            @if($account->locked == '1')
                            <td><span class="badge badge-{{ Account::statusToText($account->locked) }} js-popover-enabled" data-toggle="popover" title="" data-trigger="hover" data-placement="top" data-content="Location information for {{ $account->last_ip }} {{ Account::getIPInfo($account->last_ip) }}" data-original-title="Account is locked to {{ $account->last_ip }}.">{{ ucfirst(Account::statusToText($account->locked)) }}</span></td>
                            @else
                            <td><span class="badge badge-{{ Account::statusToText($account->locked) }}">{{ ucfirst(Account::statusToText($account->locked)) }}</span></td>
                            @endif
                            <td class="text-center">
                                <div class="btn-group">
                                  <a href="{{ url('backend/account') }}/{{ $account->id }}" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View">
                                      <i class="fas fa-eye"></i>
                                  </a>
                                    <a href="{{ url('backend/account') }}/{{ $account->id }}/edit" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete" onclick="deleteFunction('{{ $account->username}}', '{{ $account->id }}' )">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $accounts->links() }}
            </div>
        </div>
    </div>
  </div>
</div>
</main>
@endsection

@section('customjs')
<script src="{{ asset('admin/js/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script>
$( document ).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-toggle="popover"]').popover();
$("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#users tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
    });

    function deleteFunction(username, id) {
    event.preventDefault(); // prevent form submit
            swal({
      title: "Are you sure?",
      text: "Deleting an account is permanent and you cannot recover it.",
      type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#fc5c65',
  cancelButtonColor: '#26de81',
  confirmButtonText: 'I understand, delete ' + username + " now."
}).then((result) => {
  if (result.value) {
    $.ajax(
    {
        url: "account/" + id + "/delete",
        type: 'POST',
        dataType: "JSON",
        data: {
            "id": id,
            "_token": "{{ csrf_token() }}",
        },
        success: function (response)
        {
            //console.log(response); // see the reponse sent
            swal({
              title: username + " was deleted.",
              text: "Page is reloading in 3 seconds.",
              type: 'success',
            })

            setTimeout(function() {
                location.reload();
            }, 3000);
        },
        error: function(xhr) {
         //console.log(xhr.responseText);
         swal({
           title: "An error occurred.",
           text: username + " was not deleted. Try again!",
           type: 'error',
         })
       }
    });
  }
})
    }

  </script>
  @endsection
