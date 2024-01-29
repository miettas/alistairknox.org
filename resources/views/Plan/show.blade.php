<x-singlecol-layout>

	<x-slot:header> 
		
		<span class="visible sm:invisible"]>@include('includes.searches', ['tble' => 'SearchPlans'])</span>

		@if(empty($plan))
			<h1>No plan matches your query. Try again . . .<br /></h1>
		@else
		<h1>{!! $plan->plname !!}</h1>
		@endif
	
	</x-slot:header>

	<x-slot:main>

		@if(!empty($plan->address) && strlen($plan->address->suburb))
			{!! $address = addressString($plan->address->suite,$plan->address->lot_number,$plan->address->stnmbr,$plan->address->street,$plan->address->suburb,$plan->address->postcode,$plan->address->state); !!}<br />
		@endif
	
		@if(!empty($plan->building->date_built ))
			Built: {!! $plan->building->date_built !!}<br />
		@elseif(!empty($plan->building->year_built ))
			Built: {!! $plan->building->year_built !!}<br />
		@endif
		
		<h5>{!! $plan->plinfo  ?? '' !!}</h5>
	
		<span style="text-align:center">@include('/includes.next_prev.plan')</span>

		@if (Auth::check())<br /><a href="{{ url('plan/edit', [$plan->plid]) }}">( Edit )</a> @endif


	</x-slot:main>

	<x-slot:footer>
		
	</x-slot:footer>

</x-singlecol-layout>