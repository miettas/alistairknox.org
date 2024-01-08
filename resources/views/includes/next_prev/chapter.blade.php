<p >
	<strong>
		<a href="{{url('chapters', ['chapid' => $prevChap])}}" >< Previous Book</a>
			<br />
		<a href="{{url('chapters', ['chapid' => $prevPage])}}" >< Previous Chapter</a>
			&nbsp;:&nbsp;
		<a href="{{url('chapters', ['chapid' => $nextPage])}}" >Next Chapter ></a>
		<br />
		<a href="{{url('chapters', ['chapid' => $nextChap])}}" >Next  Book ></a>
	</strong>
	<br />
	@if (Auth::check())<a href='{!!url("chapters/$chapter->chapid/edit")!!}'>( Edit )</a>@endif
</p>

