<x-myapp-layout>

	<!--header------------------------->

	<x-slot:header>

		<span class="visible sm:invisible"]>@include('includes.searches', ['tble' => 'SearchChapters'])</span>

		@if( isset($noresult))
			<h1>{{ $noresult }}</h1>
		@else
			<h1 class="pl-6">Publications</h1>	
		@endif

	</x-slot:header>

	<!--sidebar---------------------------->
	
	<x-slot:sidebar>
		<div class="pr-6 ">
			@include('/includes.menus.books', ['tble' => 'SearchChapters'])
		</div>	
	</x-slot:sidebar>
	
	<!---main content------------------->

	<x-slot:main>

		@foreach ($book as $bk)
			<p>
				<div class="flex flex-col  sm:flex-row sm:pl-6 align-top  align-text-top">

					<!-- image -->
					<div class="shrink-0 pr-4 -mb-8 sm:pt-2">
						<a href="{{ url('books', $bk->bkid) }}"><img  src="{{$bk->thumb}}" alt="{{$bk->bkname}}" style=" width: 150px; height: 120px; object-fit: contain; object-position: left top;" /></a>
						<br />
					</div>

					<!-- book info -->
					<div  class="basis-4/5 max-w-[560px]" >
						<h4><a  href="{{url('books', $bk->bkid)}}">{!!  $bk->bkname !!}</a></h4>

					<!--author-->
						@if(strlen($bk->author))
							Author: {!! $bk->author  !!}<br />
						@endif
				
					<!--chapters-->
						<p  class="text-justify hyphens-auto"> 
							@if(isset($bk->chapter))
								@foreach($bk->chapter as $chap)
									<span class="text-sm"><a href="{{url('chapters', $chap->chapid)}}">{!! $chap->chapname !!}</a>, </span>	
								@endforeach
							@endif
						</p>
						<br /><br />
					</div>
				</div>
			</p>
		@endforeach
		
		{!! $book->links() !!}
	 </x-slot:main>

	 <x-slot:search>

		<span class="invisible sm:visible"]>@include('includes.searches', ['tble' => 'SearchChapters'])</span>

	</x-slot:search>

	<!--footer------------------->

	<x-slot:footer>
		
	</x-slot:footer> 

</x-guest-layout>
