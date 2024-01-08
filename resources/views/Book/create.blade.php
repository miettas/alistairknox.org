<x-singlecol-layout>

	<!--header------------------------->
	
	<x-slot:header>

		<h1>New Book</h1>

	</x-slot:header>


	<!------------------------------>

	<x-slot:sidebar>
		&nbsp;
	</x-slot:sidebar>


	<!--main content--------------->

	<x-slot:main>

	{{ html()->form('POST')->route('books.store')->open() }}
				
		@include ('Book._form')
		
	{{ html()->form()->close() }}

	
	</x-slot:main>


<!--footer------------------->

<x-slot:footer>
	&nbsp;
</x-slot:footer>

</x-singlecol-layout>