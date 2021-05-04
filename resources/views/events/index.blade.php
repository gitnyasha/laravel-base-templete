@extends('layouts/app')

@section('content')
<h2 class="pt-3">Dashboard</h2>
<a href="/events/create" class="btn btn-primary">Add New</a>
<div class="table-responsive mt-3">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>file</th>
        <th>image</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>Edit Image</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($events as $item)
      <tr>
        <td>{{ $item->id }}</td>
        <td><a href="/events/{{ $item->id }}">{{ $item->name }}</a></td>
        <td>{{ $item->file }}</td>
        <td>{{ $item->image }}</td>
        <td>
          <a href="/events/{{ $item->id }}/edit" class="btn btn-success"><i class="fa fa-pencil"></i></a>
        </td>
        <td>
          <form action="/events/{{ $item->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
          </form>
        </td>
        <td>
          <a href="/events/image/{{ $item->id }}/edit" class="btn btn-success"><i class="fa fa-pencil"></i> Image</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{ $events->links() }}
</div>
@endsection
