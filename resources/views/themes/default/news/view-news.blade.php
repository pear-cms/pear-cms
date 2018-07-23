@extends('partials.layout')

@section('content')
<div class="third-page" style="background-image:url('{{ asset('images/news/' . $news->image) }}')">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      {{ $news->title }}
    </h4>
    <p class="text-beige col-md-6 col-center">
      {{ $news->description }}
    </p>
  </div>
</div>
<div class="container col-md-6 mt-20">
<div class="row">
  <div class="col-md-12 mt-20">
<h5 class="border-bottom mb-10 text-small text-muted">
  Posted by
  <img src='{{ asset('images/icons/gm.png') }}' />
  <span class="text-gamemaster">
    {{ $news->author }}
  </span>

  <span class="float-right">
    Posted on {{ date('h:i A d/m/y',$news->timestamp) }}
  </span>
</h5>
</div>
  <div class="col-md-12 mt-10 news-content">
  <p>
    {!! ucfirst($news->content) !!}
  </p>
  </div>

<div class="col-md-12 mt-20 pb-20">
  @foreach($comments as $comment)
  @if($comment->is_gm == '1')
  <div class="col-md-12 mt-10 border gamemaster">
    <div class="row mb-10 mt-10">
      <div class="col-sm-3 col-md-3 col-lg-2 text-small text-center text-gamemaster">
      <img class="comment-avatar" src="{{asset('images/misc/navbar_avatar_anonymous.png')}}" width="75" height="75" />
      <p>
        <img class="comment-avatar" src="{{asset('images/icons/gm.png')}}" width="23" height="16" /> {{ $comment->author }}
      </p>
    </div>
      <div class="col-sm-9 col-md-9 text-small border-left text-gamemaster">
        {{ $comment->comment }}
      </div>
      <div class="col-md-12">
        <h5 class="mb-10 text-small">
          <span class="float-right text-muted">
            Posted on {{ date('h:i A d/m/y', $comment->timestamp) }}
          </span>
        </h5>
      </div>
    </div>
  </div>
  @else
  <div class="col-md-12 mt-10 border">
    <div class="row mb-10 mt-10">
      <div class="col-sm-3 col-md-3 col-lg-2 text-small text-center text-beige">
      <img class="comment-avatar" src="{{asset('images/misc/navbar_avatar_anonymous.png')}}" width="75" height="75" />
      <p>
        {{ $comment->author }}
      </p>
    </div>
      <div class="col-sm-9 col-md-9 text-small border-left">
        {{ $comment->comment }}
      </div>
      <div class="col-md-12">
        <h5 class="mb-10 text-small">
          <span class="float-right text-muted">
            Posted on {{ date('h:i A d/m/y', $comment->timestamp) }}
          </span>
        </h5>
      </div>
    </div>
  </div>
  @endif
  @endforeach
</div>

@if(isset(Auth::user()->username))
  <div class="col-md-12 mt-20">
<form action="{{ url('/news') }}/{{ $news->id }}" method="POST">
  @csrf
  @if($errors->all())
  <div class="form error" style="display:block;">
  @foreach ($errors->all() as $error)
        <p>
          {{ $error }}
        </p>
  @endforeach
  </div>
  @endif
<div class="form-group">
  <label for="comment" class="text-muted">
    Share your thoughts
  </label>
  <textarea class="form-control" id="comment" name="comment" value="{{ old('comment') }}"
  aria-describedby="commenthelp" placeholder="Enter your cool comment..." rows="3">
</textarea>
</div>
<div class="form-group text-right">
<button type="submit" class="button border orange">
Comment
</button>
</form>
</div>
</div>
</div>
</div>
@endif
@endsection
