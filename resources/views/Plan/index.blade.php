<x-myapp-layout>

	<!--header------------------------->

	<x-slot:header>

		<span class="visible sm:invisible"]>@include('includes.searches', ['tble' => 'SearchPlans'])</span>

		@if( isset($noresult))
			<h1>{{ $noresult }}</h1>
		@else
			<h1 > Plans</h1> <br />
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
	
		@foreach ($plans as $pl)
			<div class="flex flex-col  sm:flex-row sm:pl-6 align-top  align-text-top">

				<!-- image -------------->	
				<div class="w-[150px] pr-6 shrink-0">
				<a href="{{url('plans', [$pl->plid])}}">{!! $pl->thumbs !!}</a>
					<br />
				</div>
			
				<!-- info ----->
				<div class="max-w-[620px] grow text-justify hyphens-auto">
				
					<a href="{{url('plans', [$pl->plid])}}"><strong>{{ $pl->plname }}</strong></a><br />
					
					@if(isset($pl->building->buildname))
						<strong>Building: </strong>{!! $pl->building->buildname !!}, 
					@endif
					@if(!empty($pl->address->suburb))
						<strong>Address: </strong>: {!! $address = addressString($pl->address->suite,$pl->address->lot_number,$pl->address->stnmbr,$pl->address->street,$pl->address->suburb,$pl->address->postcode,$pl->address->state); !!}
					@endif 
				</div>

			</div>
		@endforeach
		
		{!! $plans->links() !!}

	</x-slot:main>

	<x-slot:search>
		<span class="sm:visible invisible"]>@include('includes.searches', ['tble' => 'SearchPlans'])</span>
	</x-slot:search>

<!--footer------------------->

	<x-slot:footer>
	
	</x-slot:footer> 

</x-guest-layout>

