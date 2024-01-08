<x-singlecol-layout>

	<!--header------------------------->
	
	<x-slot:header>

		<h1>New Address</h1>

	</x-slot:header>


	<!------------------------------>

	<x-slot:sidebar>
		&nbsp;
	</x-slot:sidebar>


	<!--main content--------------->

	<x-slot:main>

	<form method="POST" action="{{route('addresses.store')}}" >
        @csrf
		@include ('Address._form')

		</form>
	
	</x-slot:main>


<!--footer------------------->

<x-slot:footer>
	&nbsp;
</x-slot:footer>

</x-singlecol-layout>
