@extends('layouts/app')
@section('content')
<h2>Create Article</h2>
<form method="POST" action="/articles/{{ $article->id }}" enctype="multipart/form-data">
  @csrf
  @method('PATCH')
  <div class="form-group">
      <label for="title">Title</label>
      <input id="title" type="text" class="form-control" name="title" value="{{ $article->title }}" required >
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input id="description" type="text" class="form-control" name="description" value="{{ $article->description }}" required >
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection