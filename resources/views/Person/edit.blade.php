<x-singlecol-layout>

	<!--header------------------------->
	
	<x-slot:header>

	<h1 class="pl-6">Edit: {!! $person->ppfirst_name !!} {{ $person->ppname }}</h1>
	<br />
	</x-slot:header>


	<!------------------------------>

	<x-slot:sidebar>
		&nbsp;
	</x-slot:sidebar>


	<!--main content--------------->

	<x-slot:main>

	{{ html()->modelForm($person, 'PUT')->route('people.update', $person->ppid)->open() }}

		@include ('Person._form', ['SubmitButtonText' => 'Update Person'])

	{{ html()->closeModelForm() }}	

	</x-slot:main>

<!--footer------------------->

<x-slot:footer>
	&nbsp;
</x-slot:footer>

</x-singlecol-layout>
