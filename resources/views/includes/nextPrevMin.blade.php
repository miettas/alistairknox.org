
	<br /><p >
	<strong><big>
			<a href="{{$prevPage}}" > < Previous {{$text}}</a>
				&nbsp;:&nbsp;
			<a href="{{$nextPage}}" > Next {{$text}} ></a>
		</strong></big>
		
		@if (Auth::check())<br /><a href='{!!url("$tble/$editTable/edit")!!}'>( Edit )</a>@endif
	</p>
