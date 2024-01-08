<x-myapp-layout>

	<!--header------------------------->
	
	<x-slot:header>
		
	<span class="visible sm:invisible"]>@include('includes.searches', ['tble' => 'SearchAddresses'])</span>

		@if( isset($noresult))
			<h1>{{ $noresult }}</h1>
		@else
			<h1 class="pl-6">Addresses</h1>	
		@endif

	</x-slot:header>


	<!------------------------------>

	<x-slot:sidebar>
	
		&nbsp;
	</x-slot:sidebar>


	<!--main content--------------->

	<x-slot:main>
	
		@php $address = $addresses; @endphp

		@foreach ($addresses as $adr)
			<div class="flex flex-col sm:flex-row sm:pl-6 align-top  align-text-top w-screen pr-40">
			
				<!-- address -->	
				
					<div class="pr-4 w-1/2">
						<strong>Address: </strong><a href="{{ url('addresses', [$adr->adrid]) }}">{!! $addresses = address($adr->suite,$adr->stnmbr,$adr->lot_number,$adr->street,$adr->suburb,$adr->postcode,$adr->state) !!}</a>,					
					</div>

					<!-- house -->
					
					<div class="w-1/2 float-left">
						@if(!empty($adr->building->buildid))
							<strong>Building: </strong><a href="{{ url('buildings', [$adr->building->buildid]) }}">{{ $adr->building->buildname}}</a>
						@endif
					</div>
			
				</div>
			<br />
		@endforeach

		{!! $address->links() !!}

	</x-slot:main>
<!--search----------------->

	<x-slot:search>

		<span class="invisible sm:visible">@include('includes.searches', ['tble' => 'SearchAddresses'])</span>

	</x-slot:search>

	<!--footer------------------->

	<x-slot:footer>
		&nbsp;
	</x-slot:footer>

</x-guest-layout>
