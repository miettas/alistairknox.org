<x-singlecol-layout>

<!--header--------------------------------->
	
	<x-slot:header>

		<span class="visible sm:invisible"]>@include('includes.searches', ['tble' => 'SearchImages'])</span>

		<h2><a href="/buildings">The Buildings of Alistair Knox</a></h2>
		<big><a href="/buildings">Browse</a></big>	<br />	
		<span class="visible sm:invisible"]>@include('includes.searches', ['tble' => 'SearchBuildings])</span>

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

</x-slot:main>


<x-slot:search>


</x-slot:search>


<!--footer------------------->

<x-slot:footer>
	&nbsp;
</x-slot:footer>

</x-singlecol-layout>