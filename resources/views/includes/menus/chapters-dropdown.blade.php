@if(isset($chaps)) 
	<div class="dropdown"  style="text-align:right">
		<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Index
		<span class="caret"></span></button>
	 		<ul class="dropdown-menu">
			 	@foreach($chaps as $chap)
			   		<li><a href="{{action('ChaptersController@show', [$chap->chapid])}}">{{$chap->chapname}}</a></li>
			    @endforeach
			</ul>	
	</div>
@endif