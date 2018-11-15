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
            <th scope="col">Title</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tasks as $task)
          <tr>
            <td>{{ $task->title }}</td>
            <td>{{ $task->created_at->format('F d, Y h:ia') }}</td>
            <td>
              {{ Form::open(['method'  => 'DELETE', 'route' => ['tasks.destroy', $task->id]]) }}
              <button class="btn btn-danger" type="submit">Delete</button>
              <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit</a>
              {!! Form::close() !!}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $tasks->links() }}
    </div>
  </div>
</div>
@endsection