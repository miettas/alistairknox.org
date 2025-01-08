<x-myapp-layout>

	<x-slot:header>
		
		<span class="visible sm:invisible max-w-[620px]"]>@include('includes.searches', ['tble' => 'SearchBuildings'])</span>

		@if(empty($building))
			<h1>No building matches your query. Try again . . .<br /></h1>
		@else
			<h1 class="max-w-[620px]">{!! $building->buildname !!}</h1>	
		@endif
	
	</x-slot:header>
	
	<x-slot:sidebar>
		<h5>
			@include('includes.menus.buildings')
		</h5>
	</x-slot:sidebar>

	<x-slot:main>
		
		<!-- building info -->
		@if(!empty($building))	
			@include('includes/details.buildings')
		@endif
<br /><br />
		<!-- building images	 -->
		
			@if(isset($img150))

				@foreach($img150 as $img)
			
					<div  class="-mb-4" style="max-width:175px;height:190px;display:inline-block" >
						<a href="{{ url('akimages', [$img->imgid])}}"> 
							<img  src="{!! $img->imgpath !!}/{!! $img->imgname !!}.{!! $img->imgextension !!}" alt="{!! $img->alt !!}" 
							 style=" width: 150px; height: 120px; object-fit: contain; object-position: left top;" /></a>
							<span class="text-sm align-top">
								{!! $img->caption !!}  @if(strlen($img->credit))<i>Photo: {{ $img->credit }}</i>@endif
							</span>
						</a>
					</div>

				@endforeach

			@endif
		
		<span style="text-align:center">@include('/includes.nextPrevMin',['tble'=>'buildings', 'editTable'=>$building->buildid, 'id'=>'buildid', 'text'=>'Building'])</span>
	
	</x-slot:main>


	<x-slot:search>

		<span class="invisible sm:visible"]>@include('includes.searches', ['tble' => 'SearchBuildings'])</span>

	</x-slot:search>


	<x-slot:footer>		
	</x-slot:footer>

</x-guest-layout>