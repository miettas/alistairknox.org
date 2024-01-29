<x-myapp-layout>

	<!--header------------------------->
	
	<x-slot:header>	
		<br /><br />
			
	<span class="visiblw sm:invisible"]>@include('includes.searches', ['tble' => 'SearchAddresses'])</span>
		@if(empty($address))
			<h1>No address matches your query. Try again . . .<br /></h1>
		@endif

	</x-slot:header>


	<!------------------------------>

	<x-slot:sidebar>	
		
		

	</x-slot:sidebar>


	<!--main content--------------->

	<x-slot:main>
<br /><br />
	<div class="grid grid-cols-1 sm:grid-cols-2">
	
		<div>
			@if(!empty($address->building->client) || !empty($address->building->buildname))
				@if(!empty($address->building->client))
					<a href="{{ url('buildings', [$address->building_buildid]) }}">
						<strong>Client: </strong>{{ $address->building->client }}</a>
				@else
					<a href="{{ url('buildings', [$address->building_buildid]) }}">
						<strong>Building: </strong>{{ $address->building->buildname }}</a>
				@endif
			@else
				<strong>No property linked to this address</strong>
			@endif	
		</div>
		<div>
			<a href="{{ url('addresses', [$address->adrid]) }}">@include('includes.address')</a><br />		

		</div>
	
</div>
		<span style="text-align:center">@include('/includes.nextPrevMin',['tble'=>'addresses', 'editTable'=>$address->adrid, 'id'=>'adrid', 'text'=>'Address'])</span>
		@if (Auth::check())<br /><a href="{{ url('addresses/edit', [$address->adrid]) }}">( Edit )</a> @endif

	</x-slot:main>

	<!--search----------------->

	<x-slot:search>

		<span class="invisible sm:visible"]>@include('includes.searches', ['tble' => 'SearchAddresses'])</span>

	</x-slot:search>

	<!--footer------------------->


	<!--footer------------------->

	<x-slot:footer>
		&nbsp;
	</x-slot:footer>

</x-guest-layout>
