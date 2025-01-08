<x-myapp-layout>

	<!--header------------------------->

	<x-slot:header>

		@if( isset($noresult))
			<h1>{{ $noresult }}</h1>
		@else
			<h1 class="mt-12"> Do it Yourself</h1> 
		@endif
	</x-slot:header>

	<!--sidebar---------------------------->
	
	<x-slot:sidebar>
	</x-slot:sidebar>
	
	<!---main content------------------->

	<x-slot:main>

		<div class="w-1/3 float-left pr-4">
			<img src="images/buildings/600/eltham/king_st/drafting_office/knox-02.jpg" alt="The Knox drafting office" width="100%" />
			<span class="caption">The Knox drafting office. Photo: Tony Knox</span>
		</div>

		<h1>Design</h1>
		@foreach($design as $des)
			<div class="hyphenate text-justify" >
				@include('includes.details.diy', ['type' => $des])<br />
			</div>
		@endforeach
		<br />

		<!-------------->

		<div class="w-3/5 float-left pr-4">
			<img src="images/diy/building.jpg" alt="building mud brick house" width="100%" />
			<span class="caption">Photo: Alistair Knox</span>
		</div><br />
		
		<h1>Build</h1>
		@foreach($build as $bld)
			<div class="hyphenate text-justify" >
				@include('includes.details.diy', ['type' => $bld])<br />
			<div>
		@endforeach
		<br />

		<!-------------->
		
		<div class="w-1/3 float-left pr-4">
			<img src="images/books/alt_house/mud_bricks-002.jpg" alt="Making mud bricks" width="100%" />
		</div>

		<h1>Mud Bricks</h1>
		@foreach($mud as $mud)
			<div class="hyphenate text-justify">
				@include('includes.details.diy', ['type' => $mud])<br />
			</div>
		@endforeach
		<br />

		<!-------------->	
		
		<div class="w-1/3 float-left pr-4">
			<img src="images/articles/pise/pise_07.jpg" alt="Building with pise" width="100%" />
		</div>

		<h1>Pise</h1>
		@foreach($pise as $pise)
			<div class="hyphenate text-justify">
				@include('includes.details.diy', ['type' => $pise])<br />
			</div>
		@endforeach
			
	</x-slot:main>


	<x-slot:search>
		
	</x-slot:search>


	<x-slot:footer>
	</x-slot:footer>

</x-myapp-layout>