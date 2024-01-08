@if(count($img->buildings))
		<h3>{!! $img->buildings->buildname !!}, {!! $img->buildings->client !!}</h3><br />
	@endif

	<picture>
	   <source srcset='{{ $big }}' media='(min-width: 640px)' > <img src='{{ $small }}' alt="{!! $akimage->alt !!}" width="{{ $width }}"  />	
	</picture> 

	<br />
	<div class="caption">Photo: <i>{{ $img->credit }}</i><br />{{ $img->caption }}</div>
<br /><br />
	<p>
		<h4><a href="{{action('AkimagesController@show', [$img->imgid-1])}}" style="button type='button' class='btn' ">< Previous</a>
		&nbsp;&nbsp;&nbsp;
		<a href="{{action('AkimagesController@show', [$img->imgid+1])}}" style="button type='button' class='btn' ">Next ></a></h4>
		<br />
		<a href="{!!action('AkimagesController@edit', [$img->imgid])!!}">( Edit )</a>
	</p>

</div>	