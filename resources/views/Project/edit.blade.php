@if(Auth::check())

	@extends('layouts/app')


	@section('content')
	@if (Auth::check())
		<h1>Edit: {!! $project->pjname !!}</h1>
		<div style="margin-left:40px;margin-right:40px">
			{!! Form::model($project, ['method' => 'PATCH', 'action' => ['ProjectsController@update', $project->pjid]]) !!}

				@include ('Project._form', ['SubmitButtonText' => 'Update Project'])

			{!! Form::close() !!}
		</div>
		

		@include ('errors.list')
	@endif
	@stop

@endif