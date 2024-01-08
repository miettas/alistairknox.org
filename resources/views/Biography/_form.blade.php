<div class="grid grid-cols-1 sm:grid-cols-2">

	<div class="pl-4">
		<p>
			Name:<br />
			{{ html()->text('bioname')->size('100%') }}
		</p><p>
			Header<br />
			{{ html()->text('bioheader')->size('100%') }}
		</p><p>
			Title Info:<br />
			{{ html()->text('title_info')->size('100%') }}
		</p><p>
			Content: <br />
        	{{ html()->textarea('section_2')->rows(24)->cols(50) }}		
		</p>
		<button input type="submit" value="Submit" class="ml-6 mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
			Submit
		</button>
		<br /><br />
	</div>	
</div>