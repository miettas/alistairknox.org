<x-singlecol-layout>

	<!--header------------------------->
	
	<x-slot:header>

	<h1 class="pl-6">Edit: {!! $akimage->alt !!}</h1>
	<br />
	</x-slot:header>


	<!------------------------------>

	<x-slot:sidebar>
		&nbsp;
	</x-slot:sidebar>


	<!--main content--------------->

	<x-slot:main>
	
	{{ html()->modelForm($akimage, 'PUT')->route('akimages.update', $akimage->imgid)->open() }}

		@include ('Akimage._form', ['SubmitButtonText' => 'Update Image'])

	{{ html()->closeModelForm() }}	

	</x-slot:main>

<!--footer------------------->

<x-slot:footer>
	&nbsp;
</x-slot:footer>

</x-singlecol-layout>
