<x-myapp-layout>

	<x-slot:header> 

		<span class="visible sm:invisible"]>@include('includes.searches', ['tble' => 'SearchChapters'])</span>

		@if(empty($book))
			<h1>No images match your query. Try again . . .<br /></h1>
		@else
		<h1 class="max-w-[520px]">{!! $book->bkname ?: '' !!}</h1>
		@endif
		
	 </x-slot:header>
	
	<x-slot:sidebar>
	
		<div class="hyphenate"> 
			<div style="font-family:Helvetica" >
				<h4>Other Publications</h4><br />

					@foreach($bks as $bks)
						<p class="mb-3 leading-3"><a class="font-normal text-sm" href="{{ url('books', $bks->bkid) }}">{{ $bks->bkname }}</a></p>
					@endforeach
			</div>
		</div>

	</x-slot:sidebar>

		<!-- end col 1 -->

		<!-- col 2 -->

	<x-slot:main>

		<div>
		<!-- book info -->
			<h5>
				@if(!empty($book->author))
					Author: {!! $book->author !!}<br />
				@endif
				@if(strlen($book->bkdescription))
					{!! $book->bkdescription !!}<br />
				@endif
				@if(strlen($book->bkinfo))
					<div class="hyphenate" style="text-align:justify;">
						{!! $book->bkinfo !!}<br />
					</div>
				@endif
				<br />
			</h5>
		</div>
		
		<!-- book contents	 -->
		
		@if(count($book->chapter)==1)
			@foreach( $book->chapter as $c)
			<div class="hyphenate text-justify max-w-[560px]">
				{!! $c->chapinfo !!}
			</div>
			@endforeach
		@else
			@foreach($book->chapter as $chap)
				<h5><a href="{{ url('chapters', [$chap->chapid]) }}">{!! $chap->chapname !!}</a></h5>
				<div class="hyphenate text-justify max-w-[560px]">	
					{!! $info  = abbreviate($chap->chapinfo,$chap->chapid,'chapter',180) !!}
					<br /><br />
				</div>
			@endforeach
		@endif

		<span style="text-align:center">@include('/includes.next_prev.book')</span>
		@if (Auth::check())<br /><a href="{{ url('books/edit', [$book->bkid]) }}">( Edit )</a> @endif
		

	</x-slot:main>

	<x-slot:search>

		<span class="invisible sm:visible"]>@include('includes.searches', ['tble' => 'SearchChapters'])</span>

	</x-slot:search>

	<x-slot:footer>

	</x-slot:footer>

</x-guest-layout>
