@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			{!! Form::open(['action' => ['TaskController@update', $task->id], 'method'=>'POST']) !!}
			<h1>Edit Task</h1>
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<div class="form-group">
				{!! Form::label('title_label', 'Title') !!} 
				{!! Form::text('title', $task->title, ['class'=>'form-control']) !!}  
			</div>

			<div class="text-right">
				<div class="form-group">
					<button class="btn btn-success" type="submit">Save Task</button>
					<a href="{{ route('tasks.index') }}" class="btn btn-danger">Cancel</a>
				</div>
			</div>
			
			{!! Form::hidden('_method', 'PUT') !!}
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection

