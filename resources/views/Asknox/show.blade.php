<x-myapp-layout>


	<x-slot:header> 
		
		<span class="visible sm:invisible"]>@include('includes.searches', ['tble' => 'SearchAsknox'])</span>
		@if(isset($asknox->askheader))
			<h1>{!! $asknox->askheader !!}</h1>
		@endif
	
	
	</x-slot:header>
	
	<x-slot:sidebar>
		
	</x-slot:sidebar>

	<x-slot:main>
		
		<div class="hyphenate max-w-[600px]" style="hyphenate; text-align:justify;">
			{!! isset($asknox->section_2) ? $asknox->section_2." " : '' !!}
		</div>
		<br />
	
		<span style="text-align:center">@include('/includes.nextPrevMin',['tble'=>'asknoxes', 'editTable'=>$asknox->askid, 'id'=>'askid', 'text'=>'A S Knox'])</span>

	</x-slot:main>

<x-slot:search>

	<span class="invisible sm:visible"]>@include('includes.searches', ['tble' => 'SearchAsknoxes'])</span>

</x-slot:search>


<!--footer------------------->

<x-slot:footer>
</x-slot:footer>

</x-myapp-layout>
