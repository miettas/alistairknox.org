<div class="grid grid-cols-1 pl-4">

	<div>
		Info: <br />
		{{ html()->text('plinfo')->size('100%') }}
	</div>
	<div>
		Thumbnails: <br />
		{{ html()->text('thumbs')->size('100%') }}		
	</div>
	<div>
		Name: <br />
		{{ html()->text('plname')->size('100%') }}
	</div>
	<div>
		Address ID: <br />
		{{ html()->text('address_adrid')->size('100%') }}
	</div>
	<div>
		Building ID: <br />
		{{ html()->text('building_buildid')->size('100%') }}
	</div>
</div>
<button input type="submit" value="Submit" class="ml-6 mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  Submit
</button>
<br /><br />