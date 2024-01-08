<p >
	<strong>
		
		<a href="{{url('BuildingsController', ['buildid' => $prevPage])}}" >< Previous Building</a>
			&nbsp;:&nbsp;
		<a href="{{url('BuildingsController', ['buildid' => $nextPage])}}" >Next Building ></a>

		<br />
	@if (Auth::check())<a href='{!!url("building/$building->buildid/edit")!!}'>( Edit )</a>@endif
</p>

