<x-myapp-layout>


    <x-slot:header>
        <span class="visible sm:invisible"]>@include('includes.searches', ['tble' => 'SearchChapters'])</span>

        @if(empty($chapter))
            <h1>No chapter mathes your query. Try again . . . <br /></h1>
        @else
            <div class="">
                <h1 class="max-w-[520px]">{{ $chapter->book->bkname }}, {{ $chapter->chapname }}</h1>
            </div>

    </x-slot:header>


    <x-slot:sidebar>
            <div class="">
                <h4>Chapters</h4><br />

                @foreach($chaps as $chap)
                    <p class="font-normal text-sm mb-4"><a href="{{ url('books', [$chap->book_bkid]) }}">{{$chap->chapname}}</a></p>
                @endforeach
            </div>
    </x-slot:sidebar>


    <x-slot:main>
            <h4>{!! $chapter->chapname ?? '' !!}</h4>
            <h5>
                @if(!empty($bks->author))
                    Author: {{$bks->author}}
                @endif
            </h5>
            <div class="hyphenate max-w-[520px] text-justify">
                <p>
                    {!! $chapter->chapinfo ?? '' !!}
                </p>
            </div> 

            <span class="text-center">@include('/includes/next_prev/chapter')</span>
            @if (Auth::check())<br /><a href="{{ url('chapters/edit', [$chapter->chapid]) }}">( Edit )</a> @endif
            
        @endif
    </x-slot:main>

    <x-slot:search>

		<span class="invisible sm:visible"]>@include('includes.searches', ['tble' => 'SearchChapters'])</span>

	</x-slot:search>



    <x-slot:footer>
       
    </x-slot:footer>


</x-guest-layout>