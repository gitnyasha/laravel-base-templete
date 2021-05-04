@extends('layouts/app')

@section('content')
<h2 class="pt-3">Dashboard</h2>
<a href="/articles/create" class="btn btn-primary">Add New</a>
<div class="table-responsive mt-3">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Title</th>
        <th>image</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>Edit Image</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($articles as $item)
      <tr>
        <td>{{ $item->id }}</td>
        <td><a href="/articles/{{ $item->id }}">{{ $item->title }}</a></td>
        <td><img src="/storage/{{ $item->image }}" class="img-thumbnail" alt="article"></td>
        <td>
          <a href="/articles/{{ $item->id }}/edit" class="btn btn-success"><i class="fa fa-pencil"></i></a>
        </td>
        <td>
          <form action="/articles/{{ $item->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
          </form>
        </td>
        <td>
          <a href="/articles/image/{{ $item->id }}/edit" class="btn btn-success"><i class="fa fa-pencil"></i> Image</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{ $articles->links() }}
</div>
@endsection
