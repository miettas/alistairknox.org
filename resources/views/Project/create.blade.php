@if(!Auth::check())

	@extends('layouts/app')


	@section('content')

		<h1>New Project</h1>

		<div style="margin-left:40px;margin-right:40px">

			{!! Form::open(['url' => 'projects']) !!}

				@include ('Project._form', ['SubmitButtonText' => 'Add Project'])

			{!! Form::close() !!}

		</div>

		@include ('errors.list')
	@stop
	
@endif