<h3>{!! $pl->plname !!}</h3>
@if(count($pl->buildings))
	{!! $pl->buildings->buildname !!}<br />
@endif
@if(count($pl->addresses) && strlen($pl->addresses->suburb))
	Address:  
	{!! isset($pl->addresses->stnmbr) ? $pl->addresses->stnmbr : $pl->addresses->lot_number !!}  
	{!! $pl->addresses->street !!}, 
	{!! $pl->addresses->suburb !!}. 
	{!! strtoupper($pl->addresses->state) !!}
	{!! $pl->addresses->postcode !!}<br />
@endif
<p>
	{!! $pl->plid  !!} : 
	{!! $pl->plname or '' !!} <br />
	{!! $pl->plinfo !!}
</p>
<p>
	<h4><a href="{{action('PlansController@show', [$pl->plid-1])}}" style="button type='button' class='btn' ">< Previous</a>&nbsp;&nbsp;&nbsp;
	<a href="{{action('PlansController@show', [$pl->plid+1])}}" style="button type='button' class='btn' ">Next ></a></h4><br />
	@if (Auth::check())<a href="{!!action('PlansController@edit', [$pl->plid])!!}">( Edit )</a>@endif
</p>