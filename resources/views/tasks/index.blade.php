@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <h1>Tasks</h1>
      <div class="text-right">
        <div class="form-group">
          <a href="{{ route('tasks.create') }}" class="btn btn-success">Create Task</a>
      </div>
  </div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Created At</th>
        <th scope="col">Actions</th>
    </tr>
</thead>
<tbody>
  @foreach ($tasks as $task)
  <tr>
    <td>{{ $task->id }}</td>
    <td>{{ $task->title }}</td>
    <td>{{ $task->created_at->format('F d, Y h:ia') }}</td>
    <td>
      <a href="{{ route('tasks.index') }}" class="btn btn-danger">Delete</a>
      <a href="{{ route('tasks.index') }}" class="btn btn-primary">Edit</a>
  </td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
@endsection