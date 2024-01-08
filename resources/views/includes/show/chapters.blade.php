
@if(count($chap->books))
	<a href="{!!action('BooksController@show', [$chap->books_id])!!}"><h3>{!! $chap->books->bkname !!}</h3></a>
@endif
		<h4>{!! $chap->chapname !!}</h4>
		<p>
			{!! isset($chap->chapinfo) ? $chap->chapinfo." " : '' !!}
			
		</p>
		<p>
			<h4><a href="{{action('ChaptersController@show', [$chap->chapid-1])}}" style="button type='button' class='btn' ">< Previous</a>&nbsp;&nbsp;&nbsp;
			<a href="{{action('ChaptersController@show', [$chap->chapid+1])}}" style="button type='button' class='btn' ">Next ></a></h4><br />
			@if (Auth::check())<a href="{!!action('ChaptersController@edit', [$chap->chapid])!!}">( Edit )</a>@endif
		</p>