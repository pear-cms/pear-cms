@extends('admin.partials.layout')
@section('content')
<main id="main-container">
<div class="content content-full">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">All Changelogs <a href="{{ url('backend/changelog/create') }}" class="btn btn-primary float-right">Create New Changelog</a></h3>
        </div>
        <div class="block-content">
            <p>
              From here you can view all the changelogs that are published. You can filter through the changelogs by typing into the input field below.
            </p>
            <input class="form-control mb-10" type="text" id="search" placeholder="Type to search for an changelog..." />
            <div class="table-responsive">
                <table class="table table-striped table-vcenter" id="articles">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 100px;">ID</th>
                            <th>Title</th>
                            <th style="width: 15%;">Author</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($changelogs as $changelog)
                        <tr>
                            <td class="text-center"><a href="{{ url('news') }}/{{ $changelog->id }}" target="_blank">{{ $changelog->id }}</a></td>
                            <td class="font-w600">{{ $changelog->title }}</td>
                            <td>{{ $changelog->author }}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                  <a class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View" href="{{ url('changelog') }}/{{ $changelog->id }}" target="_blank">
                                      <i class="fas fa-eye"></i>
                                  </a>
                                  <a class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit" href="{{ url('backend/changelog/edit') }}/{{ $changelog->id }}" target="_blank">
                                      <i class="fas fa-pen"></i>
                                  </a>
                                    <a class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete" onclick="deleteFunction('{{ $changelog->id }}')">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $changelogs->links() }}
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
    $("#articles tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
    });

    function deleteFunction(id) {
    event.preventDefault(); // prevent form submit
            swal({
      title: "Are you sure?",
      text: "Deleting an changelog is permanent and you cannot recover it.",
      type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#fc5c65',
  cancelButtonColor: '#26de81',
  confirmButtonText: 'I understand, delete it.'
}).then((result) => {
  if (result.value) {
    $.ajax(
    {
        url: "changelog/" + id + "/delete",
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
              title: "Changelog was deleted.",
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
           text: "Changelog was not deleted. Try again!",
           type: 'error',
         })
       }
    });
  }
})
    }

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
