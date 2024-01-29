<x-myapp-layout>

	<!--header--------------------------------->

	<x-slot:header>
<div class="pl-6">
	@if( isset($noresult))
			<h1>{{ $noresult }}</h1>
	@else
		<h2>Biography</h2>
	@endif
</div>
	</x-slot:header>


	<!--sidebar---------------------------------->

	<x-slot:sidebar>
		&nbsp;
	</x-slot:sidebar>


	<!-- Main Content--------------------------->

	<x-slot:main>

		@foreach ($biography as $bio)

		<p class="pl-6">
			<h5><a href="{{url('biographies', $bio->bioid)}}">{{  $bio->bioname }}</a></h5> 		</p>

		@endforeach

	</x-slot:main>


<x-slot:search>

	<span class="invisible sm:visible"]>@include('includes.searches', ['tble' => 'SearchBiographies'])</span>

</x-slot:search>


<!--footer------------------->

<x-slot:footer>
	&nbsp;
</x-slot:footer>

</x-myapp-layout>
