<div class="grid grid-cols-1 sm:grid-cols-2 gap=6">
	<div class="pl-6">

		<p>
			Book Name:<br />
			{{ html()->text('bkname')->size('100%') }}
		</p><p>
			Description:<br />
			{{ html()->textarea('bkdescription')->rows(4)->cols(100) }}	
		</p><p>
			Info:<br />
			{{ html()->text('bkinfo')->size('100%') }}	
		</p><p>
			Author:<br />
			{{ html()->text('author')->size('100%') }}
		</p><p>
			Sort:<br />
			{{ html()->text('book_sort')->size('100%') }}
		</p><p>
			Type:<br />
			{{ html()->text('bktype')->size('100%') }}
		</p><p>
			Thumbnail:<br />
			{{ html()->text('thumb')->size('100%') }}
		</p>
		<button input type="submit" value="Submit" class="ml-6 mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
		Submit
		</button>
		<br /><br />
	</div>
</div>
