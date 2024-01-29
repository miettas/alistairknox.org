<x-singlecol-layout>

	<!--header--------------------------------->

	<x-slot:header>

	<span class="float-right mt-2"]>@include('includes.searches', ['tble' => 'SearchBuildings'])</span>
	<h2><a href="{{route('buildings.index')}}">Buildings</a></h2>
	<h3> <a href="{{route('buildings.index')}}">Browse</a></h3>
	<br />
		
	</x-slot:header>


	<!-- Main Content--------------------------->

<x-slot:main>	

@if(!empty($akimage))
		@php
			list($big,$small,$thumb,$width) = imageSize($akimage->imgpath,$akimage->imgname,$akimage->imgextension);
		@endphp
		@if($width != "100%")
			<div style="display: flex; justify-content: center;">
				<img src="{{$big}}" alt="{{$akimage->alt}}" width="67%" />
			</div>
		@else
			<img src="{{$big}}" alt="{{$akimage->alt}}" width="100%" />
		@endif
		<br />
		Photo: <i>{{$akimage->credit}}</i><br />{{$akimage->alt}}
	@endif
	<br /><br /><br />
					
	
</x-slot:main>


<x-slot:search>

	<span class="invisible sm:visible"]>@include('includes.searches', ['tble' => 'SearchImages'])</span>

</x-slot:search>


<!--footer------------------->

<x-slot:footer>
	&nbsp;
</x-slot:footer>

</x-singlecol-layout>