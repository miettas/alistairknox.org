<p >
	<strong>
		<a href="{{url('akimages', ['imgid' => $prevChap])}}" >< Previous Building</a>
			<br />
		<a href="{{url('akimages', ['imgid' => $prevPage])}}" >< Previous Image</a>
			&nbsp;:&nbsp;
		<a href="{{url('akimages', ['imgid' => $nextPage])}}" >Next Image ></a>
	</strong>
		<br />
		<a href="{{url('akimages', ['imgid' => $nextChap])}}" >Next  Building ></a>
	<br />

@if (Auth::check())<a href='{!!url("akimages/$akimage->imgid/edit")!!}'>( Edit )</a>@endif
</p>