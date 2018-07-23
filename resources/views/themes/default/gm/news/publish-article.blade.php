@extends('partials.layout')
@section('customcss')
<link href="{{ asset('themes/default/css/quill.core.css') }}" rel="stylesheet">
<link href="{{ asset('themes/default/css/quill.snow.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      Publish Article
    </h4>
    <p class="text-beige col-md-6 col-center">
      Publish an awesome, exciting and thrilling fresh-out-of-the-oven article!
    </p>
  </div>
</div>
<div class="container col-md-6 mt-20">
  <form action="{{ url('/gm/publish-article') }}" id="article" method="POST">
    @csrf
    @if($errors->all())
    <div class="form error" style="display:block;">
    @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
    </div>
    @endif
  <div class="form-group">
  <label for="title">
    News Title
  </label>
  <input type="text" class="form-control" id="title" name="title" placeholder="{{ env('APP_NAME') }} is.." value="{{ old('title') }}" />
</div>

<div class="form-group">
<label for="title">
  News Description
</label>
<input type="text" class="form-control" id="description" name="description" placeholder="Fancy description to glance at..." value="{{ old('description') }}" />
</div>
<div class="form-group">
<label for="title">
  News Image
</label>
@if( Helpers::getNewsImages() > 0)
<div class="row" id="row">
@foreach (Helpers::getNewsImages() as $image)
<div class="col-sm-3 mt-10">
  @if( old('image') == $image)
  <img src="{{ asset('themes/default/images/news') }}/{{ $image }}" width="100%" height="100%" class="image-border active" id="{{ $image }}" />
  @else
  <img src="{{ asset('themes/default/images/news') }}/{{ $image }}" width="100%" height="100%" class="image-border" id="{{ $image }}" />
  @endif
</div>
@endforeach
</div>
</div>
@if(!empty(old('image')))
<input type="hidden" name="image" id="image" value="{{ old('image') }}" />
@else
<input type="hidden" name="image" id="image" />
@endif
@endif

<div id="toolbar">
</div>

<div id="editor">
</div>
<textarea name="content" id="content" style="display:none;"></textarea>

<div class="form-group text-center">
<button type="submit" class="button border orange">
Publish article
</button>
</div>
  </form>
</div>
@endsection
@section('customjs')
<script src="{{ asset('themes/default/js/quill.core.js') }}"></script>
<script src="{{ asset('themes/default/js/quill.min.js') }}"></script>
<script>
      $(document).ready(function(){
        var editor = new Quill('#editor', {
          modules: {
            toolbar: [
      ['bold', 'italic'],
      ['link', 'blockquote', 'code-block', 'image'],
      [{ 'color': [] }],
    ]
  },
  placeholder: '{{ env('APP_NAME') }} is getting a major update...',
          theme: 'snow'
        });
        @if(!empty(old('content')))
        editor.clipboard.dangerouslyPasteHTML("{!! old('content') !!}");
        $('#content').val("{!! old('content') !!}");
        @endif

        $(".image-border").click(function () {
            $(".image-border").removeClass("active");
            // $(".tab").addClass("active"); // instead of this do the below
            $(this).addClass("active");
            var id = $(this).attr('id');
            $('#image').val(id);
        });

        $('.ql-editor').on("keyup", function() {
            $('#content').val(editor.container.firstChild.innerHTML);
        });
    });
  </script>
@endsection
