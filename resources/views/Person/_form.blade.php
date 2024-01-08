<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

	<div class="pl-4">
		<div>
			First Name: <br />
			{{ html()->text('ppfirst_name')->size('50%') }}
		</div>
		<div>
			Surname: <br />
			{{ html()->text('ppname')->size('50%') }}
		</div>
		<div>
			Description: <br />
			{{ html()->text('ppdescription')->size('50%') }}
		</div>
		<div>
			Person or Place:<br />
			{{ html()->text('pptype')->size('50%') }}
		</div>
		<div>
			Image Path:<br />
			{{ html()->text('ppimgpath')->size('50%') }}
		</div>
		<div>
			Image Name: <br/>
			{{ html()->text('ppimgname')->size('50%') }}
		</div>
		<div>
			Image Extension: <br />
			{{ html()->text('ppimgext')->size('50%') }}
		</div>
		<div>				
			Image alt: <br />
			{{ html()->text('ppalt')->size('50%') }}
		</div>
		<div>
			Image Caption: <br />
			{{ html()->text('ppcaption')->size('50%') }}
		</div>
	</div>

<div class="grid grid-cols-1">
	<div>
		Info: <br />
		{{ html()->textarea('ppinfo')->rows(23)->cols(50) }}	
	</div>
</div>

<button input type="submit" value="Submit" class="ml-6 mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  Submit
</button>
<br /><br />

