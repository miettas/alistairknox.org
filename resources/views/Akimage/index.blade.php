<x-myapp-layout>

	<!--header--------------------------------->

	<x-slot:header>
		<span class="visible sm:invisible"]>@include('includes.searches', ['tble' => 'SearchImages'])</span>

		@if( isset($noresult))
			<h1>{{ $noresult }}</h1>
		@else
			<h1>Images</h1>	
		@endif

	</x-slot:header>


	<!--sidebar---------------------------------->

	<x-slot:sidebar>

		@include('includes.menus.images')
		
	</x-slot:sidebar>


	<!-- Main Content--------------------------->

	<x-slot:main>

		@if(!empty($akimages))	
			@foreach ($akimages as $img)
					@php
						list($big,$small,$thumb,$width) = imagesize($img->imgpath,$img->imgname,$img->imgextension);
					@endphp
					<p>
						<div class="flex flex-col  sm:flex-row sm:pl-6  align-top  align-text-top">
							
							<!-- image -->	
							<div class="pr-4 sm:pb-4">
								<a href="{{url('akimages',[$img->imgid])}}">
									<picture>
										<source srcset='{{ $small }}' media='(min-width: 150px)'> <img src='{{ $thumb }}' alt="{!! $img->alt !!}" width="{{ $width }}" />
									</picture>
</a>
							</div>
						
							<!-- book info -->
							<div  class="" >
							<p>
								<a href="{{url('akimages',[$img->imgid])}}"><strong>{!! $img->building->buildname !!}</strong>, Client: {!! $img->building->client !!}, {{ $img->alt }}</a>
							</p><br /><br />
							</div></div>
					
				@endforeach

				{!! $akimages->links() !!}
			@endif

		

	</x-slot:main>

	<x-slot:search>

		<span class="invisible sm:visible"]>@include('includes.searches', ['tble' => 'SearchImages'])</span>

	</x-slot:search>

	<!--footer------------------------------>

	<x-slot:footer>

	</x-slot:footer>


</x-guest-layout>