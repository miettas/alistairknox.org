@extends('layouts/app')
@section('sidebar')
	@include ('includes.menus.projects')
@stop
@section('content')

	<div style="margin-left:40px;margin-right:40px">
		<h3>{{ $project->pjname }}</h3>
		<p>
			{!! isset($project->pjinfo) ? $project->pjinfo." " : '' !!}

			
		</p>
		<p>
			
		
		@foreach($project->buildings as $build)
			<ul>
				<li>
					<a href="{{action('BuildingsController@show', [$build->buildid])}}">*{{ $build->buildname }}*</a>
				</li>
			</ul>
		@endforeach
		</p>

		<span style="text-align:center">@include('/includes.nextPrevMin',['tble'=>'Projects', 'editTable'=>$project->pjid, 'id'=>'pjid', 'text'=>'Project'])</span>

	</div>		
	

@stop
