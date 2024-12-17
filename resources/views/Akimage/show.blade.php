<x-singlecol-layout>

	<!--header--------------------------------->

	<x-slot:header>
	<span class="visible sm:invisible"]>@include('includes.searches', ['tble' => 'SearchImages'])</span>
	<span class="invisible sm:visible float-right"]>@include('includes.searches', ['tble' => 'SearchImages'])</span>

		@if(!empty($akimage))
			<h1 class="mt-2 mb-3"><strong>{!!$akimage->building->buildname!!}</strong></h1>
		@else
			<h1>No immage matches your query. Try again . . .<br /></h1>
		@endif
		
	</x-slot:header>

	<!-- Main Content--------------------------->

	<x-slot:main>
<p>
	<div class=" mx-auto">
		<picture>
			<source srcset='{{ $big }}' media='(min-width: 640px)' > <img src='{{ $small }}' alt="{!! $akimage->alt !!}" width="{{ $width }}" />	
		</picture> 
	</div>
		<span class="caption">
			@if(strlen($akimage->caption))
				{!! $akimage->caption!!}. 
			@endif
			{!! "Photo: ",$akimage->credit ?? '' !!}</i> 
	</span>
</p>
	<br /><br />

	@if(strlen($akimage->buildings))
		<h1 style="text-align:center">
			@if(preg_match('/$akimage->buildings->buildname/',$akimage->buildings->client))
				{!! $akimage->buildings->buildname !!}, {!!$akimage->buildings->client!!}
			@else
				{!! $akimage->buildings->buildname !!}
			@endif
		</h1>
	@endif

	<span style="text-align:center">@include('/includes.next_prev.akimage')</span>
	@if (Auth::check())<br /><a href="{{ url('akimages/edit', [$akimage->imgid]) }}">( Edit )</a> @endif
	
	</x-slot:main>

	<x-slot:search>

		<span class="invisible sm:visible"]>@include('includes.searches', ['tble' => 'SearchImages'])</span>

	</x-slot:search>


	<!--footer------------------->

	<x-slot:footer>
		&nbsp;
	</x-slot:footer>

</x-singlecol-layout>
