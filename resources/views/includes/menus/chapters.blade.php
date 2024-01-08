
<ul>
	@foreach($chapter as $chap)
		<li><a href="{{url('chapters/', [$chap->chapid])}}">{{$chap->chapname}}</a></li>
	@endforeach
</ul>
