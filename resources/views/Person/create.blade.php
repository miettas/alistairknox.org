<x-singlecol-layout>

	<!--header------------------------->
	
	<x-slot:header>

		<h1>New Person</h1>

	</x-slot:header>


	<!------------------------------>

	<x-slot:sidebar>
		&nbsp;
	</x-slot:sidebar>


	<!--main content--------------->

	<x-slot:main>

	{{ html()->form('POST')->route('people.store')->open() }}
				
		@include ('Person._form')

	{{ html()->form()->close() }}
	
	</x-slot:main>


<!--footer------------------->

<x-slot:footer>
	&nbsp;
</x-slot:footer>

</x-singlecol-layout>