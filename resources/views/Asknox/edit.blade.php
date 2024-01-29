<x-singlecol-layout>

	<!--header------------------------->
	
	<x-slot:header>

	<h1 class="pl-6">Edit: {!! $asknox->askname !!}</h1>
	<br />
	</x-slot:header>


	<!------------------------------>

	<x-slot:sidebar>
		&nbsp;
	</x-slot:sidebar>


	<!--main content--------------->

	<x-slot:main>

	{{ html()->modelForm($asknox, 'PUT')->route('asknoxes.update', $asknox->askid)->open() }}

		@include ('Asknox._form', ['SubmitButtonText' => 'Update Knox'])

	{{ html()->closeModelForm() }}	

	</x-slot:main>

<!--footer------------------->

<x-slot:footer>
	&nbsp;
</x-slot:footer>

</x-singlecol-layout>
