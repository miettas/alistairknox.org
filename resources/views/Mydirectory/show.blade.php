<x-guest-layout>

	<x-slot:header> 
		
		<span class="visible sm:invisible"]>@include('includes.searches', ['tble' => 'SearchMydirectories'])</span>
		@if(isset($mydirectory->dirheader))
			<h1>{!! $mydirectory->dirheader !!}</h1>
		@endif
	
	
	</x-slot:header>
	
	<x-slot:sidebar>
		<div class="sm:pl-6">




			<h4 class="mb-3">Biography</h4>
			@include('includes.menus.bio')
		</div>
	</x-slot:sidebar>

	<x-slot:main>
			<div class="hyphenate max-w-[520px]" style="hyphenate; text-align:justify;">
			{!! isset($mydirectory->section_2) ? $mydirectory->section_2." " : '' !!}
		</div>
		<br />
		
	
	</x-slot:main>

<x-slot:search>

	<span class="invisible sm:visible"]>@include('includes.searches', ['tble' => 'SearchMydirectories'])</span>

</x-slot:search>


<!--footer------------------->

<x-slot:footer>
</x-slot:footer>

</x-singlecol-layout>
