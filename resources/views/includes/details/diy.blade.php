<h5><a href="{!! url('chapters', [$type->chapid]) !!}">{!!  $type->chapname !!}</a></h5>

@foreach($book as $bk)
	@if($bk->bkid == $type->book_bkid)
		<strong>Author:</strong> {{$bk->author}}
		<br />
	@endif
@endforeach

{!! $info  = abbreviate($type->chapinfo,$type->chapid,'chapters',240) !!}

<p style="margin-bottom:-.5em"></p>