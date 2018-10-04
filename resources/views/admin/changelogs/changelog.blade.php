@extends('admin.partials.layout')
@section('content')
<main id="main-container">
<div class="content content-full">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">{{ $changelog->title }} <span class="float-right">Posted on {{ date('h:i A d/m/y', $changelog->timestamp) }}</span></h3>
        </div>
        <div class="block-content">
            <div class="row">
              <form id="settings" class="col-md-12">
                <div class="alert alert-danger" style="display:none"></div>

                <div class="form-group col-12">
                    <label>Changelog Title</label>
                    <input type="text" class="form-control" name="changelogTitle" placeholder="{{ $changelog->title }}" value="{{ old('changelogTitle', $changelog->title) }}">
                    <div class="form-text text-muted small">
                      The title of the changelog.
                    </div>
                </div>

                <div class="form-group col-12">
                    <label>Changelog Content</label>
                    <textarea class="form-control" id="editor" name="changelogContentt" rows="6" placeholder="Content..."></textarea>
                </div>

            <div class="col-12 text-center">
              <input type="submit" class="btn btn-primary mb-10" value="Save Changelog" onclick="saveSettings()" />
            </div>
          </form>
            </div>
      </div>
    </div>
  </div>
</div>
</main>
@endsection

@section('customjs')
<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
<script src="{{ asset('admin/js/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script>
$( document ).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-toggle="popover"]').popover();
  $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });

    var editor = ClassicEditor
    .create( document.querySelector( '#editor' ), {
          toolbar: [ 'Heading', 'bold', 'italic', 'bulletedList', 'numberedList', 'Link', 'undo', 'redo' ]
      } )
				.then( editor => {
					console.log( editor );
          @if(!old('changelogContent'))
          editor.setData('{!! $changelog->content !!}');
          @else
          editor.setData('{!! old("changelogContent") !!}');
          @endif
          editorinstance = editor;
				} )
				.catch( error => {
					console.error( error );
				} );

        $(".image-border").click(function () {
            $(".image-border").removeClass("active");
            // $(".tab").addClass("active"); // instead of this do the below
            $(this).addClass("active");
            var id = $(this).attr('id');
            $('#image').val(id);
        });

});

function saveSettings() {
  event.preventDefault(); // prevent form submit
          swal({
    title: "Are you sure?",
    text: "Saving will overwrite the current changelog's content.",
    type: 'warning',
showCancelButton: true,
confirmButtonColor: '#26de81#fc5c65',
cancelButtonColor: '#fc5c65',
confirmButtonText: 'Save it!'
}).then((result) => {
if (result.value) {
  $.ajax(
  {
      url: "save/" + {{ $changelog->id }},
      type: 'POST',
      dataType: "JSON",
      data: {
          "changelogTitle": $("input[name='changelogTitle']").val(),
          "changelogContent": editorinstance.getData(),
          "_token": "{{ csrf_token() }}",
      },
      success: function (response)
      {
          //console.log(response); // see the reponse sent
          swal({
            title: "Changelog was saved!",
            text: "Page is reloading in 3 seconds.",
            type: 'success',
          })

          setTimeout(function() {
              location.reload();
          }, 3000);
      },
      error: function(xhr) {
       console.log(xhr.responseText);
       swal({
         title: "An error occurred.",
         text: "Changelog was not saved. Try again!",
         type: 'error',
       })
       $.each(xhr.responseJSON.errors, function (i, error) {
                var el = $(document).find('[name="'+i+'"]');
                el.after($('<span style="color: red;">'+error[0]+'</span>'));
            });
     }
  });
}
})
  }

  </script>
  @endsection
