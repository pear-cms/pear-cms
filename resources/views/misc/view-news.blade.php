@extends('partials.layout')

@section('content')
<div class="third-page" style="background-image:url('{{ asset('images/news/' . $news->picture) }}')">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      Viewing News #{{$news->id}}
    </h4>
    <p class="text-beige col-md-6 col-center">
      You are currently viewing news #{{$news->id}}
    </p>
  </div>
</div>
<div>
<div class="container col-md-6 mt-20">
<div class="row">
  <a class="news-article col-sm" style="background-image:url('{{ asset('images/news/' . $news->picture) }}')"> </a>
  <div class="col-md-12 mt-20">
  <h5 class="border-bottom mb-10">
    {{ucwords($news->title)}}<span class="float-right">Posted on {{date('H:i:s M d, Y', $news->date)}}</span>
  </h5>
  <p>
    {{ucfirst($news->content)}}
  </p>
  </div>
  <div class="col-md-12 mt-20"><h5 class="border-top mb-10">Comments</h5></div>
</div>
@if (Session::has('success'))
              {{ Session::get('success') }}
              @endif
              @if ( Session::has('fail'))
              {{ Session::get('fail') }}
              @endif
<form action="{{ url('/news/') }}/{{$news->id}}" method="POST">
  @csrf
  @if($errors->all())
  <div class="form error" style="display:block;">
  @foreach ($errors->all() as $error)
              <p>{{ $error }}</p>
          @endforeach
  </div>
  @endif
<div class="form-group">
  <label for="comment">Add a comment:</label>
  <textarea class="form-control" id="comment" name="comment" aria-describedby="commenthelp" placeholder="Enter your cool comment..." rows="3"></textarea>
</div>
<div class="form-group text-right">
<button type="submit" class="button border orange">
Publish
</button>
</form>
</div>
</div>
@endsection
