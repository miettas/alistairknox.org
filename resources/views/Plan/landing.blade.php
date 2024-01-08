<x-myapp-layout>

	<!--header------------------------->

	<x-slot:header>
		
		<span class="visible sm:invisible"]>@include('includes.searches', ['tble' => 'SearchPlans'])</span>

		@if( isset($noresult))
			<h1>{{ $noresult }}</h1>
		@else
		<h1>Plans</h1>
		@endif
	</x-slot:header>

	<!--sidebar---------------------------->
	
	<x-slot:sidebar>
		<div class="pr-6">
				@include('includes.menus.plans')
		</div>
	</x-slot:sidebar>
	
	<!---main content------------------->

	<x-slot:main>
	
		@foreach ($buildings as $bld)

			@if(!empty($bld->plan))	
				@foreach($bld->plan as $pl)

					<p>
						{{ $bld->year_built }} <a href="{{ route('plans.show', [$pl->plid]) }}">{{ $bld->client }} &nbsp; &nbsp;{{  $pl->plname }}</a>
					</p>	
					
				@endforeach
			@endif

		@endforeach

		{!! $buildings->links() !!}

</x-slot:main>

<x-slot:search>

	<span class="invisible sm:visible"]>@include('includes.searches', ['tble' => 'SearchPlans])</span>

</x-slot:search>

<!--footer------------------->

<x-slot:footer>

</x-slot:footer> 

</x-guest-layout>

