<div class="grid grid-cols-1 gap-6">

	<div class="pl-4">
		Name:<br />
		{{ html()->text('chapname')->size('100%') }}
	</div>
	
</div>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
	<div class="pl-4">	
		<div>
			Keywords:<br />
			{{ html()->text('keyword')->size('26%') }}
		</div>
	</div>
		<div>
			Book ID:<br />
			{{ html()->text('book_bkid')->size('28%') }}
		</div>
		<div>
			Sort:<br />
			{{ html()->text('sort_order')->size('23%') }}
		</div>
	</div>
</div>	
<div class="grid grid-cols-1 gap-6">

	<div class="pl-4">
		Info:<br />
		{{ html()->textarea('chapinfo')->rows(24)->cols(100) }}
	</div>
</div>

		
<button input type="submit" value="Submit" class="ml-6 mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  Submit
</button>
<br /><br />

