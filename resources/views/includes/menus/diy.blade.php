
<ul>
	@foreach($chapter as $chap)
		<li><a href="{{action('ChaptersController@show', [$chap->keyword => 'design',$chap->keyword => 'mud'])}}">{{$chap->chapname}}</a></li>
	@endforeach
</ul>
