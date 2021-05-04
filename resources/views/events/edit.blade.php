@extends('layouts/app')
@section('content')
<h2>Create event</h2>
<form method="POST" action="/events/{{ $event->id }}" enctype="multipart/form-data">
  @csrf
  @method('PATCH')
  <div class="form-group">
      <label for="name">Name</label>
      <input id="name" type="text" class="form-control" name="name" value="{{ $event->name }}" required >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection