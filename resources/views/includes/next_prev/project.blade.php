<p >
	<strong>
	
		<a href="{{action('ProjectsController@show', ['pjid' => $prevPage])}}" >< Previous Project</a>
			&nbsp;:&nbsp;
		<a href="{{action('ProjectsController@show', ['pjid' => $nextPage])}}" >Next Project ></a>
	</strong>
		<br />
	@if (Auth::check())<a href="{!!action('ProjectsController@edit', [$project->pjid])!!}">( Edit )</a>@endif

</p>

