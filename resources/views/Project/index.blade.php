@extends('layouts/app')
@section('sidebar')
	@include ('includes.menus.projects')
@stop

@section('content')

	<h1>Projects</h1>

	<div style="margin-left:40px;margin-right:40px">

		@foreach ($project as $pj)
		<table>
			<tr>
				<td>
					<h4>{{ $pj->pjid }}: 
				
					<a href="{{ action('ProjectsController@show', [$pj->pjid]) }}">{{  $pj->pjname }}</a></h4> 
					@if (Auth::check())<a href="{{action('ProjectsController@edit', [$pj->pjid])}}">( Edit )</a>@endif
					</td></tr>
					<tr><td colspan="2">

					@if(!empty($pj->buildings ))
						@foreach($pj->buildings as $build)
						
							<small><a href="{{action('BuildingsController@show', [$build->buildid])}}">{!! $build->buildname !!}</a>, </small>
						
						@endforeach
					@endif
				</td>
			</tr>
		</table>

		@endforeach

</div>

{!! $project->render() !!}

@include ('errors.list')
	

@endsection