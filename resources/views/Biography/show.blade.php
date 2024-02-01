<x-myapp-layout>

	<x-slot:header>
		<span class="visible sm:invisible"]>@include('includes.searches', ['tble' => 'SearchBiographies'])</span>
		<h1>{!! $biography->bioheader !!}</h1>
		
	
	</x-slot:header>
	
	<x-slot:sidebar>
		<div class="sm:pl-6">
			<h4 class="mb-3">Biography</h4>
			@include('includes.menus.bio')
		</div>
	</x-slot:sidebar>

	<x-slot:main>
			<div class="hyphenate max-w-[520px]" style="hyphenate; text-align:justify;">
			{!! isset($biography->section_2) ? $biography->section_2." " : '' !!}
		</div>
		<br />
		@if($biography->bioid != 29)
			<span class="text-center">@include('/includes.nextPrevMin',['tble'=>'biographies', 'editTable'=>$biography->bioid, 'id'=>'bioid', 'text'=>'Biography'])</span>
		@endif

	</x-slot:main>

<x-slot:search>

	<span class="invisible sm:visible"]>@include('includes.searches', ['tble' => 'SearchChapters'])</span>

</x-slot:search>


<!--footer------------------->

<x-slot:footer>
	&nbsp;
</x-slot:footer>

</x-myapp-layout>
