<x-myapp-layout>

	<!--header------------------------->

	<x-slot:header>
		<span class="visible sm:invisible"]>@include('includes.searches', ['tble' => 'SearchChapters'])</span>

		@if( isset($noresult))
			<h1>{{ $noresult }}</h1>
		@else
			<h1 class="pl-6 max-w-[520px]">Chapters</h1>
		@endif
	</x-slot:header>

	<!--sidebar---------------------------->

	<x-slot:sidebar>
		<div class="pr-6">
		
			<h4 mb-6>Publications</h4>
			@foreach($bks as $bk)
				<p class="mb-4"><a  class="font-normal text-sm" href="{{url('books', [$bk->bkid])}}">{{$bk->bkname}}</a></p>
			@endforeach
		
		</div>
	</x-slot:sidebar>

	<!---main content------------------->

	<x-slot:main>
		
		<div class="pl-6 max-w-[620px] text-justify hyphens-auto">
			
			@foreach ($chapter as $chap)

				<p>
					<strong><a href="{{url('chapters', [$chap->chapid])}}">{!!  $chap->chapname !!}</a></strong><br /> 
					{!! $info  = abbreviate($chap->chapinfo,$chap->chapid,'chapters',240) !!}
				</p><br />
			
			@endforeach	
		</div>
		{!! $chapter->links() !!}
	</x-slot:main>

	<x-slot:search>

		<span class="invisible sm:visible"]>@include('includes.searches', ['tble' => 'SearchChapters'])</span>

	</x-slot:search>


	<!--footer------------------->

	<x-slot:footer>
		
	</x-slot:footer> 

</x-guest-layout>

	