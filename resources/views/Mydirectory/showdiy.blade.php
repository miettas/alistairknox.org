<x-guest-layout>

	<!--header------------------------->

	<x-slot:header>

		<span class="visible sm:invisible"]>@include('includes.searches', ['tble' => 'SearchChapters'])</span>

		@if( isset($noresult))
			<h1>{{ $noresult }}</h1>
		@else
			@if($directory->dirid == 31)
				<h1>{!! $directory->dirheader !!}</h1>
			@endif	
		@endif

	</x-slot:header>

	<!--sidebar---------------------------->
	
	<x-slot:sidebar>
		<div class="pr-6  bg-gray-200">
		<h5>Biography</h5>
		@include('includes.menus.diy')	
		</div>	
	</x-slot:sidebar>
	
	<!---main content------------------->
		<h1>{!! $directory->dirheader !!}</h1>

			<div class="hyphenate text-justify">
				{!! isset($directory->section_2) ? $directory->section_2." " : '' !!}
			</div>
			<br />
		</div>	

	</x-slot:main>

<x-slot:search>

	<span class="invisible sm:visible"]>@include('includes.searches', ['tble' => 'SearchChapters'])</span>

</x-slot:search>

<x-slot:footer>

</x-slot:footer>

</x-guest-layout>
