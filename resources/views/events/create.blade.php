@extends('layouts/app')
@section('content')
    <h2>Create Event</h2>
  <form method="POST" action="/events" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input id="name" type="text" class="form-control" name="name" placeholder="Event name..." required >
    </div>

    <div class="form-group">
        <label for="file">File</label>
        <input id="file" type="file" class="form-control" name="file" required >
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control-file" id="image" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection