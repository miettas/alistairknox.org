<x-singlecol-layout>

	<!--header------------------------->
	
	<x-slot:header>

	<h1 class="pl-6">Edit: {!! $book->bkname !!}</h1>
	<br />
	</x-slot:header>


	<!------------------------------>

	<x-slot:sidebar>
		&nbsp;
	</x-slot:sidebar>


	<!--main content--------------->

	<x-slot:main>


	{{ html()->modelForm($book, 'PUT')->route('books.update', $book->bkid)->open() }}

		@include ('Book._form', ['SubmitButtonText' => 'Update Book'])

	{{ html()->closeModelForm() }}


	</x-slot:main>

<!--footer------------------->

<x-slot:footer>
	&nbsp;
</x-slot:footer>

</x-singlecol-layout>
