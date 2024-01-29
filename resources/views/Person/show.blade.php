<x-myapp-layout>

	<x-slot:header> 
		<span class="visible sm:invisible"]>@include('includes.searches', ['tble' => 'SearchPeople'])</span>

		@if(empty($person))
))
			<h1>No person matches your query. Try again . . .<br /></h1>
		@else
			<h1>{!! $person->ppfirst_name !!} {{ $person->ppname }}</h1>	
		@endif
	
	</x-slot:header>
	
	<x-slot:sidebar>
	
	<h4>Other People</h4>
			@foreach($ppl as $ppl) 
				@if(isset($ppl->ppfirst_name))
					<p class="mb-3"><a class="font-normal text-sm" 
						href="{{url('people', [$ppl->ppid])}}">{{$ppl->ppfirst_name}} {{$ppl->ppname}}</a></p>
				@elseif(isset($ppl->ppname))
				<p class="mb-3"><a class="font-normal text-sm" href="people/{$ppl->ppid}">{{$ppl->ppname}}</a></p>
				@endif
			
			@endforeach
	</x-slot:sidebar>

	<x-slot:main>
		<p>
		<div class="max-w-[520px]">
			<img src="{{$person->ppimgpath}}/{{$person->ppimgname}}.{{$person->ppimgext}}" 
				class="figure-img img-fluid" alt="{{$person->ppalt}}" width="100%" />
			<span class="caption">{!!$person->ppcaption!!}</span>
		</p>
		<br />
		
			<div class="hyphenate text-justify ">
				{!! $person->ppinfo ?? '' !!}	
			</div>

			<span style="text-align:center">@include('/includes.next_prev.person')</span>

		

			@if (Auth::check())<br /><a href="{{ url('people/edit', [$person->plid]) }}">( Edit )</a> @endif
		</div>

	</x-slot:main>

	<x-slot:search>

		<span class="invisible sm:visible"]>@include('includes.searches', ['tble' => 'SearchPeople'])</span>

	</x-slot:search>

	<x-slot:footer>
	
	</x-slot:footer>

</x-guest-layout>
