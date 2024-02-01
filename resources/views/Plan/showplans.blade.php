<x-singlecol-layout>

	<!--header------------------------->

	<x-slot:header>
		
	<span class="float-right mt-2"]>@include('includes.searches', ['tble' => 'SearchPlans'])</span>

	<h1 ><a href="/plans">The Plans of Alistair Knox</a></h1><br />
	<h3 class="-mt-6"><a href="/plans">Browse</a></h3>

	</x-slot:header>
	
	<!---main content------------------->

	<x-slot:main>
	
	<br />

		{!! $plan->plinfo !!}
		
		<br /><br />

</x-slot:main>

<!--footer------------------->

<x-slot:footer>

</x-slot:footer> 

</x-singlecol-layout>

