<p >
	<strong>
		<a href="{{ route('books.show', [$prevPage]) }}" >< Previous Book</a>
			&nbsp;:&nbsp;
		<a href="{{ route('books.show', [$nextPage]) }}" >Next Book ></a>
	</strong>
		<br />
	@if (Auth::check())<a href='{{ url("books/$book->bkid/edit") }}''>( Edit )</a>@endif
</p>

