<x-singlecol-layout>

	<!--header------------------------->
	
	<x-slot:header>

	<h1 class="pl-6">Edit: {!! $chapter->chapname !!}</h1>
	<br />
	</x-slot:header>


	<!------------------------------>

	<x-slot:sidebar>
		&nbsp;
	</x-slot:sidebar>


	<!--main content--------------->

	<x-slot:main>

	{{ html()->modelForm($chapter, 'PUT')->route('chapters.update', $chapter->chapid)->open() }}

		@include ('Chapter._form', ['SubmitButtonText' => 'Update Chapter'])

	{{ html()->closeModelForm() }}	

	</x-slot:main>

<!--footer------------------->

<x-slot:footer>
	&nbsp;
</x-slot:footer>

</x-singlecol-layout>
