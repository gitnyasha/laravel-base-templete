@extends('layouts/app')
@section('content')
    <h2>Create Article</h2>
  <form method="POST" action="/articles" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input id="title" type="text" class="form-control" name="title" placeholder="article title..." required >
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <input id="description" type="text" class="form-control" name="description" required >
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control-file" id="image" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection