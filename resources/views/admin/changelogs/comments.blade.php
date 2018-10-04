@extends('admin.partials.layout')
@section('content')
<main id="main-container">
<div class="content content-full">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">All Comments</h3>
        </div>
        <div class="block-content">
            <p>
              From here you can view all the comments made by your players on each news article. You can filter through the comments by typing into the input field below.
            </p>
            <input class="form-control mb-10" type="text" id="search" placeholder="Type to search for a comment..." />
            <div class="table-responsive">
                <table class="table table-striped table-vcenter" id="comments">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 100px;">ID</th>
                            <th>Comment</th>
                            <th style="width: 25%;">Author</th>
                            <th style="width: 15%;"><img alt="Gamemaster" src="{{ asset('images/icons/gm.png') }}" /></th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($comments as $comment)
                        <tr>
                            <td class="text-center">
                              @if(News::find($comment->newsId))
                                <a href="{{ url('news') }}/{{ $comment->newsId }}"  target="_blank">{{ $comment->newsId }}</a>
                                @else
                                <i class="fas fa-times" style="color:#fc5c65;" data-toggle="tooltip" title="Article was deleted"></i>
                                @endif
                            </td>
                            <td class="font-w600 js-popover-enabled" data-toggle="popover" title="" data-trigger="hover" data-placement="top" data-content="{{ $comment->comment }}" data-original-title="Full comment content">{{ substr($comment->comment, 0, 30) }}..</td>
                            <td>{{ $comment->author }}</td>
                            <td>
                              @if($comment->is_gm)
                              yes
                              @else
                              no
                              @endif
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete" onclick="deleteFunction('{{ $comment->id }}')">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $comments->links() }}
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
    $("#comments tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
    });

    function deleteFunction(id) {
    event.preventDefault(); // prevent form submit
            swal({
      title: "Are you sure?",
      text: "Deleting a comment is permanent and you cannot recover it.",
      type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#fc5c65',
  cancelButtonColor: '#26de81',
  confirmButtonText: 'I understand, delete comment now.'
}).then((result) => {
  if (result.value) {
    $.ajax(
    {
        url: "comment/" + id + "/delete",
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
              title: "Comment was deleted.",
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
