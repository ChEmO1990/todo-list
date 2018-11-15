@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<h1>New Task</h1>
			<div class="form-group">
				{!! Form::label('title_label', 'Title') !!} 
				{!! Form::text('title', null, ['class'=>'form-control']) !!}  
			</div>

			<div class="text-right">
				<div class="form-group">
					<a href="{{ route('tasks.store') }}" class="btn btn-success">Save Task</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

