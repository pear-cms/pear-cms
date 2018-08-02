@extends('admin.partials.layout')
@section('content')
<main id="main-container">
<div class="content content-full">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">All Articles <a href="{{ url('backend/article/create') }}" class="btn btn-primary float-right">Create New Article</a></h3>
        </div>
        <div class="block-content">
            <p>
              From here you can view all the articles that are published. You can filter through the articles by typing into the input field below.
            </p>
            <input class="form-control mb-10" type="text" id="search" placeholder="Type to search for an article..." />
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
                      @foreach ($articles as $article)
                        <tr>
                            <td class="text-center"><a href="{{ url('news') }}/{{ $article->id }}" target="_blank">{{ $article->id }}</a></td>
                            <td class="font-w600">{{ $article->title }}</td>
                            <td>{{ $article->author }}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                  <a class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View" href="{{ url('news') }}/{{ $article->id }}" target="_blank">
                                      <i class="fas fa-eye"></i>
                                  </a>
                                  <a class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit" href="{{ url('backend/article/edit') }}/{{ $article->id }}" target="_blank">
                                      <i class="fas fa-pen"></i>
                                  </a>
                                    <a class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete" onclick="deleteFunction('{{ $article->id }}')">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $articles->links() }}
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
      text: "Deleting an article is permanent and you cannot recover it.",
      type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#fc5c65',
  cancelButtonColor: '#26de81',
  confirmButtonText: 'I understand, delete it.'
}).then((result) => {
  if (result.value) {
    $.ajax(
    {
        url: "article/" + id + "/delete",
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
              title: "Article was deleted.",
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
           text: "Comment was not deleted. Try again!",
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
