@extends('layouts/app')
@section('content')
<div class="card rounded shadow-sm border-0">
    <div class="card-body p-4">
        <img src="/storage/{{ $article->image }}" alt="" class="img-fluid d-block mx-auto mb-3">
    </div>
    <form method="POST" action="/articles/image/{{ $article->id }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control-file" id="image" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection