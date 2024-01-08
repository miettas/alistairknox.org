<x-singlecol-layout>

	<!--header------------------------->
	
	<x-slot:header>

	<h1 class="pl-6">Edit: {!! $mydirectory->dirname !!}</h1>
	<br />
	</x-slot:header>


	<!------------------------------>

	<x-slot:sidebar>
		&nbsp;
	</x-slot:sidebar>


	<!--main content--------------->

	<x-slot:main>

	{{ html()->modelForm($mydirectory, 'PUT')->route('mydirectories.update', $mydirectory->dirid)->open() }}

		@include ('Biography._form', ['SubmitButtonText' => 'Update Directory'])

	{{ html()->closeModelForm() }}	

	</x-slot:main>

<!--footer------------------->

<x-slot:footer>
	&nbsp;
</x-slot:footer>

</x-singlecol-layout>
