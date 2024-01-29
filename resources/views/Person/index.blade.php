<x-myapp-layout>

	<!--header------------------------->

	<x-slot:header>
		<span class="visible sm:invisible"]>@include('includes.searches', ['tble' => 'SearchPeople'])</span>

		@if( isset($noresult))
			<h1>{{ $noresult }}</h1>
		@else
			<h1 class="pl-6 -mb-10 -ml-6"> People &amp; Places</h1> <br />
		@endif

	</x-slot:header>

	<!--sidebar---------------------------->
	
	<x-slot:sidebar>
		<div class="pr-6">
			@include('includes.menus.people')
		</div>
	</x-slot:sidebar>
	
	<!---main content------------------->

	<x-slot:main>
	
		@foreach ($person as $pp)
					
			<div class="flex flex-col  sm:flex-row align-top  align-text-top">	

			<!--heading----------->
				<div class="w-[150px] shrink-0 mt-4">
				<strong><a href="{{url('people', [$pp->ppid])}}">{{ $pp->ppfirst_name  ?? ''}} {{  $pp->ppname }}</a></strong> 
				
				<!--image----------->
				<br />
					<a href="{{url('people', [$pp->ppid])}}">
					<img src="{{$pp->ppimgpath}}/{{$pp->ppimgname}}.{{$pp->ppimgext}}" alt="{{$pp->ppalt}}" width="100%" />
					</a>
				</div>

				<!--info------------------->
				<div class="pl-6 max-w-[620px]">
	
					<p  class="text-justify hyphens-auto mb-6 sm:mt-7 -ml-7 sm:ml-0"> 
					{!! $info  = abbreviate($pp->ppinfo,$pp->ppid,'people',240) !!} <a href="/people/{{$pp->ppid}}"> </a><br />
					</p>
					<!-- @if (Auth::check())<a href="{{url('People/edit', [$pp->ppid])}}">( Edit )</a>@endif -->

				</div>
				</div>		
				@endforeach

				
			
			
			{!! $person->links() !!}
			</x-slot:main>

			<x-slot:search>

				<span class="invisible sm:visible"]>@include('includes.searches', ['tble' => 'SearchPeople'])</span>

			</x-slot:search>


<!--footer------------------->

<x-slot:footer>
	
</x-slot:footer> 

</x-guest-layout>